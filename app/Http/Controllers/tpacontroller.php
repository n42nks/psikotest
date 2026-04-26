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
            ->whereNotNull('jawaban_peserta')
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
        // 🔥 SIMPAN STATUS GLOBAL
        // ===============================
        if ($semuaSelesai) {
            session()->put('status_test_selesai', true);
        }

        // ===============================
        // 🔥 REDIRECT
        // ===============================

        // kalau semua selesai → langsung ke hasil
        if ($semuaSelesai) {
            return redirect('/datahasil')->with('stssukses', 1);
        }

        // kalau belum → balik ke pilih soal
        return redirect('/pilihsoal')->with('stssukses', 1);
    }
}
