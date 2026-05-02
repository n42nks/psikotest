<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tbhasil;
use App\Models\tbpendaftar;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use App\SoalTpa;
use App\detail;
use App\kategori;
use App\TbJawabPeserta;
use PDF;

class HasilController extends Controller
{

    public function cetak_pdf(Request $req, tbhasil $id,$npm,tbpendaftar $tbpendaftar)
    {
    	$pendaftar = DB::table('tbpendaftar')->where('NPM', '=', $npm)->first();

    	$nama=$pendaftar->Nama;
    	$nomer=$pendaftar->NPM;
    	$alamat=$pendaftar->Alamat;
        $telp=$pendaftar->Telp;


        $jumlah=0; $salah = 0;$hasil=0;
		$hasilPerKategori = collect();

        $result2 = DB::table('tb_jawab_peserta')->where('npm', '=', $npm)->first();

        if($result2){
         $benar=DB::table('tb_jawab_peserta')
          ->join('tbpendaftar','tb_jawab_peserta.npm','=','tbpendaftar.NPM')
          ->join('soaltpa', 'tb_jawab_peserta.id_soal', '=', 'soaltpa.id_soal')
          ->join('tb_kategori', 'soaltpa.id_kategori', '=', 'tb_kategori.id_kategori') // asumsi nama tabel dan kolom
          ->select(
              'tb_jawab_peserta.npm',
              'tbpendaftar.Nama',
              'tb_kategori.kategori','tb_kategori.id_kategori', // tambahkan kategori di select
              DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`=soaltpa.`jawaban`,1,NULL)) as hasil"),
              DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`!=soaltpa.`jawaban`,1,NULL)) as salah"),
              DB::raw("COUNT(tb_jawab_peserta.id_soal) as jumlah")
          )
          ->groupBy('tb_jawab_peserta.npm', 'tbpendaftar.Nama', 'tb_kategori.kategori','tb_kategori.id_kategori') // tambahkan group by kategori
          ->orderBy('tb_kategori.id_kategori')
          ->get();

          $hasilPerKategori = $benar->where('npm', $npm);

        }

		return view('/backend/hasil/cetak_hasil',compact('npm','nama','alamat','telp','hasilPerKategori'));
    }
    public function ceknpm(Request $request)
    {
        $npm = $request->npm;

        // 🔥 VALIDASI
        if (!$npm) {
            return response()->json([
                'data' => '<div class="alert alert-danger">NPM tidak ditemukan</div>'
            ]);
        }

        // 🔥 DATA PESERTA
        $peserta = DB::table('tbpendaftar')
            ->where('NPM', $npm)
            ->first();

        if (!$peserta) {
            return response()->json([
                'data' => '<div class="alert alert-warning">Data peserta tidak ditemukan</div>'
            ]);
        }

        // 🔥 HASIL PER KATEGORI (URUTKAN!)
        $hasilPerKategori = DB::table('tb_jawab_peserta as j')
        ->join('soaltpa as s', 'j.id_soal', '=', 's.id_soal')
        ->join('tb_kategori as k', 's.id_kategori', '=', 'k.id_kategori')
        ->select(
            'k.id_kategori',
            'k.kategori',
            DB::raw('COUNT(s.id_soal) as jumlah'),

            // ✔ benar
            DB::raw('SUM(CASE
                WHEN j.jawaban_peserta = s.jawaban
                THEN 1 ELSE 0 END) as benar'),

            // ❌ salah (termasuk NULL)
            DB::raw('SUM(CASE
                WHEN COALESCE(j.jawaban_peserta, "") != s.jawaban
                THEN 1 ELSE 0 END) as salah'),

            // 🔥 skor (2 poin kalau benar)
            DB::raw('SUM(CASE
                WHEN j.jawaban_peserta = s.jawaban
                THEN 2 ELSE 0 END) as skor')
        )
        ->where('j.npm', $npm)
        ->groupBy('k.id_kategori', 'k.kategori')
        ->orderBy('k.id_kategori', 'ASC')
        ->get();
        // 🔥 HITUNG TOTAL
        $totalBenar = $hasilPerKategori->sum('benar');
        $totalSalah = $hasilPerKategori->sum('salah');
        $totalSoal  = $hasilPerKategori->sum('jumlah');

        $totalSkor = $hasilPerKategori->sum('skor');
        $maxSkor   = $totalSoal * 2;

        $nilai = $maxSkor > 0 ? round(($totalSkor / $maxSkor) * 100) : 0;

        // 🔥 RENDER HTML
        $html = view('backend.partials.hasil_npm', compact(
            'peserta',
            'hasilPerKategori',
            'totalBenar',
            'totalSalah',
            'totalSoal',
            'nilai'
        ))->render();

        // 🔥 DATA GRAFIK (DINAMIS!)
        return response()->json([
            'data' => $html,

            // contoh mapping ke grafik
            'hasilta' => $totalSoal,
            'hasiltb' => $totalBenar,
            'hasiltc' => $totalSalah,
            'hasiltd' => $nilai,

            // kalau mau DISC / lainnya tetap bisa
            'hasilD' => 0,
            'hasilI' => 0,
            'hasilS' => 0,
            'hasilC' => 0,

            'hasila' => 0,
            'hasilb' => 0,
            'hasilc' => 0,
            'hasild' => 0,
        ]);
    }

    public function hasilsemua()
    {
        $peserta = DB::table('tbpendaftar')->get();

        $data = [];

        foreach ($peserta as $p) {

            $hasil = DB::table('tb_jawab_peserta as j')
                ->join('soaltpa as s', 'j.id_soal', '=', 's.id_soal')
                ->select(
                    DB::raw('COUNT(s.id_soal) as jumlah'),
                    DB::raw('SUM(CASE WHEN j.jawaban_peserta = s.jawaban THEN 1 ELSE 0 END) as benar'),
                    DB::raw('SUM(CASE WHEN j.jawaban_peserta != s.jawaban THEN 1 ELSE 0 END) as salah')
                )
                ->where('j.npm', $p->NPM)
                ->first();

            $totalSoal = $hasil->jumlah ?? 0;
            $benar = $hasil->benar ?? 0;
            $salah = $hasil->salah ?? 0;

            $nilai = $totalSoal > 0 ? round(($benar / $totalSoal) * 100, 2) : 0;

            $data[] = [
                'npm' => $p->NPM,
                'nama' => $p->Nama,
                'total' => $totalSoal,
                'benar' => $benar,
                'salah' => $salah,
                'nilai' => $nilai
            ];
        }

        // kirim ke view partial
        $html = view('backend.partials.hasil_semua', compact('data'))->render();

        return response()->json([
            'data' => $html
        ]);
    }
}
