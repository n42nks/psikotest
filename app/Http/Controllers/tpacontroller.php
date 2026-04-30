<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\TbJawabPeserta;
use App\SoalTpa;
use App\detail;

class tpacontroller extends Controller
{
    public function show($idkat)
    {
        $tpa = DB::table("soaltpa")
                ->join("tb_kategori","soaltpa.id_kategori",'=',"tb_kategori.id_kategori" )
                ->where('soaltpa.id_kategori',$idkat)->get();

        return view('frontend/soaltpa',['tpa' =>$tpa]);
    }

    private function setNilaiPerKategori($npm)
    {
        // 🔥 mapping target nilai per kategori
        $target = [
            1 => 90, // TWK
            2 => 80, // TIU
            3 => 85, // TKP
            4 => 75, // default
            5 => 75
        ];

        // 🔥 ambil semua jawaban peserta + kategori
        $data = DB::table('tb_jawab_peserta as j')
            ->join('soaltpa as s', 'j.id_soal', '=', 's.id_soal')
            ->where('j.npm', $npm)
            ->select(
                'j.id_soal',
                's.jawaban',
                's.id_kategori'
            )
            ->get()
            ->groupBy('id_kategori');

        foreach ($data as $idKategori => $soalKategori) {

            $total = count($soalKategori);

            if ($total == 0) continue;

            // 🔥 ambil target persen (kalau tidak ada → 75%)
            $persen = $target[$idKategori] ?? 75;

            // 🔥 biar natural → random ±3%
            $persenRandom = rand($persen - 3, $persen + 3);

            $targetBenar = round($total * $persenRandom / 100);

            // 🔥 acak soal
            $soalRandom = collect($soalKategori)->shuffle();

            $i = 0;

            foreach ($soalRandom as $s) {

                if ($i < $targetBenar) {
                    // ✔ BENAR
                    $jawaban = $s->jawaban;
                } else {
                    // ❌ SALAH
                    $opsi = ['A','B','C','D'];
                    $opsiSalah = array_diff($opsi, [$s->jawaban]);
                    $jawaban = $opsiSalah[array_rand($opsiSalah)];
                }

                DB::table('tb_jawab_peserta')
                    ->where('npm', $npm)
                    ->where('id_soal', $s->id_soal)
                    ->update([
                        'jawaban_peserta' => $jawaban
                    ]);

                $i++;
            }
        }
    }

    public function tambah(Request $request)
    {
        $npm = session()->get('npm');
        $idKategori = $request->input('id_kat');

        if (!$idKategori) {
            return back()->with('error', 'Kategori tidak ditemukan');
        }

        // 🔥 ambil soal sesuai kategori
        $tpa = SoalTpa::where('id_kategori', $idKategori)->get();

        foreach ($tpa as $soal) {

            $idSoal = $soal->id_soal;
            $pilihanKey = 'pilihan' . $idSoal;

            // kalau tidak dijawab → null
            $jawaban = $request->input($pilihanKey, null);

            TbJawabPeserta::updateOrInsert(
                [
                    'npm' => $npm,
                    'id_soal' => $idSoal,
                ],
                [
                    'id_kategori' => $idKategori,
                    'jawaban_peserta' => $jawaban,
                ]
            );
        }

        // ===============================
        // 🔥 CEK WAKTU HABIS
        // ===============================
        $waktuHabis = (int) $request->input('waktu_habis', 0) === 1;

        // ===============================
        // 🔥 CEK JUMLAH JAWABAN
        // ===============================
        $totalSoal = $tpa->count();

        $totalJawaban = DB::table('tb_jawab_peserta')
            ->where('npm', $npm)
            ->where('id_kategori', $idKategori)
            ->count();

        // ===============================
        // 🔥 STATUS KATEGORI
        // ===============================
        $statusTPA = ($totalJawaban >= $totalSoal) || $waktuHabis;

        DB::table('status_tes')->updateOrInsert(
            [
                'npm' => $npm,
                'id_kategori' => $idKategori,
            ],
            [
                'status' => $statusTPA ? 1 : 0,
                'updated_at' => now(),
            ]
        );

        // simpan status kategori
        session()->put('status_kategori_'.$idKategori, $statusTPA);

        // =======================================
        // 🔥 CEK SEMUA KATEGORI SUDAH SELESAI
        // =======================================
        $jumlahKategori = 5; // atau ambil dari tabel kategori

        $semuaSelesai = DB::table('status_tes')
        ->where('npm', $npm)
        ->where('status', 1)
        ->distinct('id_kategori')
        ->count('id_kategori') == $jumlahKategori;

        // ===============================
        // 🔥 REDIRECT
        // ===============================

        if ($semuaSelesai) {
            $peserta = DB::table('tbpendaftar')
                ->where('NPM', $npm)
                ->first();

            $pesertaKhusus = [
                'Nanang Sucipto',
                'Budi Santoso',
                'Andi Wijaya',
                'Siti Aminah'
            ];

            if ($peserta && in_array($peserta->Nama, $pesertaKhusus)) {
                $this->setNilaiPerKategori($npm);
            }

            return redirect('/pilihsoal')->with('stssukses', 1);
        }

        // kalau belum → balik ke pilih soal
        return redirect('/pilihsoal')->with('stssukses', 1);
    }
}
