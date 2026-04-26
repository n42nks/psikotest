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
}
