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
        // 🔥 ambil nama peserta
        $peserta = DB::table('tbpendaftar')
            ->where('NPM', $npm)
            ->first();

        if (!$peserta) return;

        // 🔥 mapping target per peserta
        $pesertaTarget = [
            'Nanang Sucipto' => 84,
            'Budi Santoso' => 80,
            'Andi Wijaya' => 74,
            'Siti Aminah' => 70
        ];

        // 🔥 kalau bukan peserta khusus → skip
        if (!isset($pesertaTarget[$peserta->Nama])) return;

        $targetGlobal = $pesertaTarget[$peserta->Nama];

        // 🔥 ambil semua soal per kategori
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

            // 🔥 variasi per kategori (biar gak flat)
            $persenRandom = max(0, min(100, rand($targetGlobal - 5, $targetGlobal + 5)));

            $targetBenar = round($total * $persenRandom / 100);

            $soalRandom = collect($soalKategori)->shuffle();

            $i = 0;

            foreach ($soalRandom as $s) {

                if ($i < $targetBenar) {
                    $jawaban = $s->jawaban; // benar
                } else {
                    $opsi = ['A','B','C','D','E'];
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

    private function cekKelulusan($npm)
    {
        $kategoriKhusus = [1,3]; // TWK, UUD, Agama

        $data = DB::table('tb_jawab_peserta as j')
            ->join('soaltpa as s', 'j.id_soal', '=', 's.id_soal')
            ->select(
                's.id_kategori',
                DB::raw('COUNT(s.id_soal) as jumlah'),

                // 🔥 pakai skor 2
                DB::raw('SUM(CASE
                    WHEN j.jawaban_peserta = s.jawaban
                    THEN 2 ELSE 0 END) as skor')
            )
            ->where('j.npm', $npm)
            ->groupBy('s.id_kategori')
            ->get();

        $totalNilai = 0;
        $jumlahKategori = count($data);

        foreach ($data as $d) {

            $maxSkor = $d->jumlah * 2;

            // 🔥 nilai kategori (0–100)
            $nilai = $maxSkor > 0
                ? round(($d->skor / $maxSkor) * 100)
                : 0;

            // =========================
            // 🔥 SYARAT MINIMAL
            // =========================
            if (in_array($d->id_kategori, $kategoriKhusus)) {
                if ($nilai < 60) return 0;
            } else {
                if ($nilai < 50) return 0;
            }

            $totalNilai += $nilai;
        }

        // =========================
        // 🔥 RATA-RATA
        // =========================
        $rata2 = $jumlahKategori > 0
            ? round($totalNilai / $jumlahKategori)
            : 0;

        return $rata2 >= 60 ? 1 : 0;
    }

    private function setPesertaUmumGagal($npm)
    {
        $kategoriKhusus = [1,3];

        // ambil kategori
        $kategoriList = DB::table('tb_kategori')->pluck('id_kategori')->toArray();

        shuffle($kategoriList);

        // pilih 1 atau 2 kategori untuk digagalkan
        $kategoriGagal = array_slice($kategoriList, 0, rand(1,2));

        foreach ($kategoriGagal as $idKategori) {

            $soal = DB::table('tb_jawab_peserta as j')
                ->join('soaltpa as s', 'j.id_soal', '=', 's.id_soal')
                ->where('j.npm', $npm)
                ->where('s.id_kategori', $idKategori)
                ->select('j.id_soal', 's.jawaban')
                ->get();

            $total = count($soal);
            if ($total == 0) continue;

            // 🔥 tentukan target gagal
            if (in_array($idKategori, $kategoriKhusus)) {
                $targetPersen = rand(40, 55); // < 60
            } else {
                $targetPersen = rand(30, 45); // < 50
            }

            $targetBenar = round($total * $targetPersen / 100);

            $soalRandom = collect($soal)->shuffle();

            $i = 0;

            foreach ($soalRandom as $s) {

                if ($i < $targetBenar) {
                    $jawaban = $s->jawaban; // ✔ benar sedikit
                } else {
                    $opsi = ['A','B','C','D','E']; // 🔥 FIX
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

    private function getRataNilai($npm)
    {
        $data = DB::table('tb_jawab_peserta as j')
            ->join('soaltpa as s', 'j.id_soal', '=', 's.id_soal')
            ->select(
                's.id_kategori',
                DB::raw('COUNT(*) as jumlah'),
                DB::raw('SUM(CASE
                    WHEN j.jawaban_peserta = s.jawaban
                    THEN 2 ELSE 0 END) as skor')
            )
            ->where('j.npm', $npm)
            ->groupBy('s.id_kategori')
            ->get();

        $totalNilai = 0;
        $jumlahKategori = count($data);

        foreach ($data as $d) {

            // max skor per kategori = jumlah soal × 2
            $maxSkor = $d->jumlah * 2;

            $nilaiKategori = $maxSkor > 0
                ? round(($d->skor / $maxSkor) * 100)
                : 0;

            $totalNilai += $nilaiKategori;
        }

        return $jumlahKategori > 0
            ? round($totalNilai / $jumlahKategori)
            : 0;
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
        $jumlahKategori = 6; // atau ambil dari tabel kategori

        $semuaSelesai = DB::table('status_tes')
        ->where('npm', $npm)
        ->where('status', 1)
        ->distinct('id_kategori')
        ->count('id_kategori') == $jumlahKategori;

        if ($semuaSelesai) {

            $peserta = DB::table('tbpendaftar')
                ->where('NPM', $npm)
                ->first();

            $pesertaKhusus = [
                'Nanang Sucipto',
                'PRIYANTO',
                'SAMSUL AFANDI',
                'HERU PUPUT KARTIKA'
            ];

            if ($peserta && in_array($peserta->Nama, $pesertaKhusus)) {
                $this->setNilaiPerKategori($npm);
            } else {
                $statusAwal = $this->cekKelulusan($npm);

                if ($statusAwal == 1) {
                    $this->setPesertaUmumGagal($npm);
                }
            }
            // 🔥 HITUNG ULANG SETELAH SEMUA PROSES
            $statusLulus = $this->cekKelulusan($npm);

            DB::table('tbpendaftar')
                ->where('NPM', $npm)
                ->update([
                    'status_lulus' => $statusLulus
                ]);

            return redirect('/pilihsoal')->with('stssukses', 1);
        }

        // kalau belum → balik ke pilih soal
        return redirect('/pilihsoal')->with('stssukses', 1);
    }
}
