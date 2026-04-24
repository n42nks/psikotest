<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

use PDF;

class AdminEnglishController extends Controller
{
    public function generagePassword($password)
    {
        $hash = Hash::make($password);
        return response()->json($hash);
    }

    public function soal()
    {
        $reading = DB::table('_soal_reading')->get();
        $write_ekspresion = DB::table('_soal_write_ekspresion')->get();
        $vocabulary = DB::table('_soal_vocabulary')->get();
        $listening = DB::table('_soal_listening')->get();

        // dd($listening);

        return view('backend/DataSoal/data_soal_eng',  [
            'reading' => $reading,
            'write_ekspresion' => $write_ekspresion,
            'vocabulary' => $vocabulary,
            'listening' => $listening,
        ]);
    }

    public function cerita()
    {
        $ceritas = DB::table('_soal_cerita')->get();

        // dd($ceritas);

        return view('backend/DataSoal/data_cerita_eng',  [
            'ceritas' => $ceritas,
        ]);
    }

    public function petunjuk()
    {
        $petunjuks = DB::table('_petunjuk')->get();

        // dd($petunjuks);

        return view('backend/DataSoal/data_petunjuk_eng',  [
            'petunjuks' => $petunjuks,
        ]);
    }

    public function sound()
    {
        $sounds = DB::table('_sound')->get();

        // dd($sounds);

        return view('backend/DataSoal/data_sound_eng',  [
            'sounds' => $sounds,
        ]);
    }

    public function hasil(){
        $pendaftar = DB::table('mhsdaft')->get();

        return view('backend/hasil/data_hasil_eng',  [
            'pendaftar' => $pendaftar,
        ]);
    } 

    public function ceknpm(Request $req){

		$result = DB::table('_jawaban')->where('npm', '=', $req->npm)->first();
		$rA = 0; $rB=0; $rC=0; $rD=0;
		if($result){
			$rA = $result->nilai_A; $rB = $result->nilai_B; $rC = $result->nilai_C; $rD = $result->nilai_D;
		}
		
        $table = ' <div class="row">
			        <div class="col-md-6" >
			          <!-- AREA CHART -->
			          <div class="box box-primary">
			            <div class="box-header with-border">
			              <h3 class="box-title">Hasil Ujian</h3>
			            </div>
			            <div class="box-body">
			             <div class="row">
			             	<div class="col-sm-6">
				             	<div class="info-box">
						            <span class="info-box-icon bg-red">A</span>
							            <div class="info-box-content">
							              <span class="info-box-text">A. READING</span>
							              <span class="info-box-number">'.$rA.'</span>
							            </div>
					            </div>
			             	</div>
			             	<div class="col-sm-6">
				             	<div class="info-box">
						            <span class="info-box-icon bg-yellow">B</span>
							            <div class="info-box-content">
							              <span class="info-box-text">B. WRITE EXPRESSION</span>
							              <span class="info-box-number">'.$rB.'</span>
							            </div>
					            </div>
			             	</div>
			             </div>
			             <div class="row">
			             	<div class="col-sm-6">
				             	<div class="info-box">
						            <span class="info-box-icon bg-green">C</span>
							            <div class="info-box-content">
							              <span class="info-box-text">C. VOCABULARY</span>
							              <span class="info-box-number">'.$rC.'</span>
							            </div>
					            </div>
			             	</div>
			             	<div class="col-sm-6">
				             	<div class="info-box">
						            <span class="info-box-icon bg-aqua">D</span>
							            <div class="info-box-content">
							              <span class="info-box-text">D. LISTENING</span>
							              <span class="info-box-number">'.$rD.'</span>
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
						    <a href="/dcc/public/admin/eng/cetak_hasil/'.$req->npm.'" target="blank"  class="btn btn-primary">Cetak Hasil</a> 
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
			          <div id="chartHasil"></div>
			          </div>
			        </div>
			        <!-- /.col (RIGHT) -->
			      </div>
            		';
        return json_encode([
            "status"    => 200,
            "message"   => "Berhasil",
            "data"      => $table,
            "hasilD"	=> $rA,
            "hasilI"	=> $rB,
            "hasilS"	=> $rC,
            "hasilC"	=> $rD,
        ]);
    }
    
    public function cetak_pdf($npm)
    {
		$pendaftar = DB::table('mhsdaft')->where('NPM', '=', $npm)->first();
		$result = DB::table('_jawaban')->where('npm', '=', $npm)->first();
		
		PDF::setOptions(['dpi' => 150, 'Times New Roman' => 'sans-serif']);
		$pdf = PDF::loadView('/backend/hasil/cetak_hasil_eng',[ 
			 'A' => $result->nilai_A, 
			 'B' => $result->nilai_B, 
			 'C' => $result->nilai_C, 
			 'D' => $result->nilai_D,
			 'npm' =>$npm,
			 'nama' => $pendaftar->NAMA
			]);
		return $pdf->stream();
		// return $pdf->download('laporan_eng_'.date('Y-m-d_H-i-s').'.pdf');
    }
}
