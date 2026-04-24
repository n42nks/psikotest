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
    public function ceknpm(Request $req, tbhasil $id){
        $dnpm = $id->where("npm", $req->npm)->get();
        $kD = tbhasil::where("npm", $req->npm)->where("hasil", "k_D" )->count();
        $kI = tbhasil::where("npm", $req->npm)->where("hasil", "k_I" )->count();
        $kS = tbhasil::where("npm", $req->npm)->where("hasil", "k_S" )->count();
        $kC = tbhasil::where("npm", $req->npm)->where("hasil", "k_C" )->count();

        $result = DB::table('_jawaban')->where('npm', '=', $req->npm)->first();

        $hasilReading = 0;
		$resultR = DB::table('_detail__jawaban')->where("npm",'=',$req->npm)->first();
		if ($resultR) {
			$jwbbenar = DB::table('_detail__jawaban')
			->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
			->join('_soal_reading','_detail__jawaban.soalnya','=','_soal_reading.soal')
			->select('_detail__jawaban.npm','mhsdaft.NPM', DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_reading.`key`,1,NULL)) as benar"),DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`!=_soal_reading.`key`,1,NULL)) as salah"), DB::raw("COUNT(_detail__jawaban.id) as jumlah"))
			->groupby('_detail__jawaban.npm','mhsdaft.NPM')->get();

			$reading = DB::table("_detail__jawaban")->where("npm",'=',$req->npm)->first();
		$npmReading = $reading->npm;
		$jwbbenar = $jwbbenar->where("npm","=",$req->npm)->first();

		$hasilReading = $jwbbenar->benar;
		}


		//
		$hasilW = 0;
		$resultW = DB::table('_detail__jawaban')->where("npm",'=',$req->npm)->first();
		if ($resultR) {
			$jwbW = DB::table('_detail__jawaban')
			->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
			->join('_soal_write_ekspresion','_detail__jawaban.soalnya','=','_soal_write_ekspresion.soal')
			->select('_detail__jawaban.npm','mhsdaft.NPM', DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_write_ekspresion.`key`,1,NULL)) as benar"),DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`!=_soal_write_ekspresion.`key`,1,NULL)) as salah"), DB::raw("COUNT(_detail__jawaban.id) as jumlah"))
			->groupby('_detail__jawaban.npm','mhsdaft.NPM')->get();
			$write = DB::table("_detail__jawaban")->where("npm",'=',$req->npm)->first();
			$npmW = $write->npm;
			$jwbW = $jwbW->where("npm","=",$req->npm)->first();

			$hasilW = $jwbW->benar;
		}

		//
		$hasilV = 0;
		$resultV = DB::table('_detail__jawaban')->where("npm",'=',$req->npm)->first();
		if ($resultV) {
			$jwbV = DB::table('_detail__jawaban')
			->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
			->join('_soal_vocabulary','_detail__jawaban.soalnya','=','_soal_vocabulary.soal')
			->select('_detail__jawaban.npm','mhsdaft.NPM', DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_vocabulary.`key`,1,NULL)) as benar"),DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`!=_soal_vocabulary.`key`,1,NULL)) as salah"), DB::raw("COUNT(_detail__jawaban.id) as jumlah"))
			->groupby('_detail__jawaban.npm','mhsdaft.NPM')->get();
			$vocab = DB::table("_detail__jawaban")->where("npm",'=',$req->npm)->first();
		$npmV = $vocab->npm;
		$jwbV = $jwbV->where("npm","=",$req->npm)->first();

		$hasilV = $jwbV->benar;
		}


		$hasilL = 0;
		$resultL = DB::table('_detail__jawaban')->where("npm",'=',$req->npm)->first();
		if ($resultL) {
			$jwbL = DB::table('_detail__jawaban')
			->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
			->join('_soal_listening','_detail__jawaban.soalnya','=','_soal_listening.soal')
			->select('_detail__jawaban.npm','mhsdaft.NPM', DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_listening.`key`,1,NULL)) as benar"),DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`!=_soal_listening.`key`,1,NULL)) as salah"), DB::raw("COUNT(_detail__jawaban.id) as jumlah"))
			->groupby('_detail__jawaban.npm','mhsdaft.NPM')->get();
			$lis = DB::table("_detail__jawaban")->where("npm",'=',$req->npm)->first();
		$npmL = $lis->npm;
		$jwbL = $jwbL->where("npm","=",$req->npm)->first();

		$hasilL = $jwbL->benar;
		}








		$jumlah=0; $salah = 0;$hasil=0;
		$result2 = DB::table('tb_jawab_peserta')->where('npm', '=', $req->npm)->first();
		if($result2){
		$benar=DB::table('tb_jawab_peserta')
        ->join('mhsdaft','tb_jawab_peserta.npm','=','mhsdaft.NPM')
        ->join('soaltpa', 'tb_jawab_peserta.id_soal', '=', 'soaltpa.id_soal')
        ->select('tb_jawab_peserta.npm','mhsdaft.NAMA', DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`=soaltpa.`jawaban`,1,NULL)) as hasil"), DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`!=soaltpa.`jawaban`,1,NULL)) as salah"), DB::raw("COUNT(tb_jawab_peserta.id_soal) as jumlah"))
        ->groupBy('tb_jawab_peserta.npm','mhsdaft.NAMA')
        ->get();
        $tpa = DB::table('tb_jawab_peserta')->where('npm', '=', $req->npm)->first();
        $npmtpa = $tpa->npm;
        $benarr = $benar->where('npm', '=', $req->npm)->first();


        $jumlah = $benarr->jumlah;
        $salah = $benarr->salah;
        $hasil = $benarr->hasil;
    }

        // $result1 = DB::table('mhsdaft')->where('npm', '=', $req->npm)->first();
        // $tpanama = $result1->NAMA;

  //       $tpnpm = 0; $tpnama=""; $tpjml=0; $tphasil=0;
		// if($result1){
		// 	$tpnpm = $result->npm;
		// }
		// if($namatpa){
		// 	$tpnama = $namatpa->NAMA;
		// }


        $table = '<div class="row">
			        <div class="col-md-6" >
			          <!-- AREA CHART -->
			          <div class="box box-primary">
			            <div class="box-header with-border">
			              <h3 class="box-title">Hasil Ujian TPA</h3>
			            </div>
			            <div class="box-body">
			             <div class="row">
			             	<div class="col-sm-6">
				             	<div class="info-box">
						            <span class="info-box-icon bg-red">S</span>
							            <div class="info-box-content">
							              <span class="info-box-text">SOAL</span>
							              <span class="info-box-number">'.$jumlah.'</span>
							            </div>
					            </div>
			             	</div>
			             	<div class="col-sm-6">
				             	<div class="info-box">
						            <span class="info-box-icon bg-yellow">B</span>
							            <div class="info-box-content">
							              <span class="info-box-text">BENAR</span>
							              <span class="info-box-number">'.$hasil.'</span>
							            </div>
					            </div>
			             	</div>
			             </div>
			             <div class="row">
			             	<div class="col-sm-6">
				             	<div class="info-box">
						            <span class="info-box-icon bg-green">S</span>
							            <div class="info-box-content">
							              <span class="info-box-text">SALAH</span>
							              <span class="info-box-number">'.$salah.'</span>
							            </div>
					            </div>
			             	</div>
			             	<div class="col-sm-6">
				             	<div class="info-box">
						            <span class="info-box-icon bg-aqua">H</span>
							            <div class="info-box-content">
							              <span class="info-box-text">HASIL</span>
							              <span class="info-box-number">'.$hasil*'2'.'</span>
							            </div>
					            </div>
			             	</div>
			             </div>

				            <!-- /.info-box-content -->
				          </div>
				         <br>
				         <br>
				         <br>
				          <center>
						    <a  href="/admin/cetak_hasil/'.$req->npm.'" target="blank"   class="btn btn-primary">Cetak Hasil</a>
							</center>
				          <br>
				          <br>
				         <!-- /.box-body -->
			          </div>
			          <!-- /.box -->
			        </div>
			        <!-- /.col (LEFT) -->
			        <div class="col-md-6">
			          <div class="box box-info">
			          <div id="chartHasil2"></div>
			          </div>
			        </div>
			        <!-- /.col (RIGHT) -->
			      </div>


            		';
        return json_encode([
            "status"    => 200,
            "message"   => "Berhasil",
            "data"      => $table,
            "hasilD"	=> $kD,
            "hasilI"	=> $kI,
            "hasilS"	=> $kS,
            "hasilC"	=> $kC,
            "hasila"	=> $hasilReading,
            "hasilb"	=> $hasilW,
            "hasilc"	=> $hasilV,
            "hasild"	=> $hasilL,
            "hasilta"	=> $jumlah,
            "hasiltb"	=> $hasil,
            "hasiltc"	=> $salah,
            "hasiltd"	=> $hasil*'2',

        ]);

    }

    public function cetak_pdf(Request $req, tbhasil $id,$npm,tbpendaftar $tbpendaftar)
    {    	
    	$pendaftar = DB::table('mhsdaft')->where('NPM', '=', $npm)->first();
    	
    	$nama=$pendaftar->NAMA;
    	$kota=$pendaftar->KOTA;
    	$alamat=$pendaftar->ALAMAT1;
	
    
        $jumlah=0; $salah = 0;$hasil=0;
		$hasilPerKategori = collect();

        $result2 = DB::table('tb_jawab_peserta')->where('npm', '=', $npm)->first();
		
        if($result2){
         $benar=DB::table('tb_jawab_peserta')
          ->join('mhsdaft','tb_jawab_peserta.npm','=','mhsdaft.NPM')
          ->join('soaltpa', 'tb_jawab_peserta.id_soal', '=', 'soaltpa.id_soal')
          ->join('tb_kategori', 'soaltpa.id_kategori', '=', 'tb_kategori.id_kategori') // asumsi nama tabel dan kolom          
          ->select(
              'tb_jawab_peserta.npm',
              'mhsdaft.NAMA',
              'tb_kategori.kategori','tb_kategori.id_kategori', // tambahkan kategori di select
              DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`=soaltpa.`jawaban`,1,NULL)) as hasil"),
              DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`!=soaltpa.`jawaban`,1,NULL)) as salah"),
              DB::raw("COUNT(tb_jawab_peserta.id_soal) as jumlah")
          )
          ->groupBy('tb_jawab_peserta.npm', 'mhsdaft.NAMA', 'tb_kategori.kategori','tb_kategori.id_kategori') // tambahkan group by kategori
          ->orderBy('tb_kategori.id_kategori')
          ->get();

          $hasilPerKategori = $benar->where('npm', $npm);
           
        }
		
		return view('/backend/hasil/cetak_hasil',compact('npm','nama','kota','alamat','hasilPerKategori'));


    }
}
