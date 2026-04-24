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

class HasilsController extends Controller
{
     public function tampildisc(tbhasil $tbhasil,tbpendaftar $tbpendaftar){
          $return = [
            "tbhasil"   => $tbhasil->all(),
            "tbpendaftar"   => $tbpendaftar->all(),
        ];
        return view('backend/hasil/hasil_seluruh',  $return);
    }

public function tampilhasiling()
    {
        
       return view('backend/hasil/hasil_seluruh', compact('jwbbenar'));
    }
    public function test()
    {
            return view('backend/hasil/hasil_seluruh');
    }
    
     public function tampilhasiltpa()
    {
            $tpa ="";
            $eng = "";
    	 $benar2 = tbhasil::groupBy('npm')
					->selectRaw('count(*) as kd, npm')
					->where('hasil','k_D' )
					->get();

					
    	// B.Inggris

    	// reading


$cek = tbpendaftar::all();
// $res[] = "";
foreach ($cek as $k) {

    $rd = DB::table('_detail__jawaban')
            ->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
            ->join('_soal_reading','_detail__jawaban.soalnya','=','_soal_reading.soal')
            ->select(DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_reading.`key`,1,NULL)) as rd"))
            ->groupby('_detail__jawaban.npm','mhsdaft.NAMA')->where("_detail__jawaban.npm", $k->NPM)->first();
    $toJSON = json_encode($rd);
    $reading = $toJSON == "null" ? 0 : substr(explode(":", $toJSON)[1], 0, strlen(explode(":", $toJSON)[1])-1) ;

    $wr = DB::table('_detail__jawaban')
            ->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
            ->join('_soal_write_ekspresion','_detail__jawaban.soalnya','=','_soal_write_ekspresion.soal')
            ->select(DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_write_ekspresion.`key`,1,NULL)) as wr"))
            ->groupby('_detail__jawaban.npm','mhsdaft.NAMA')->where("_detail__jawaban.npm", $k->NPM)->first();
    $toJSON = json_encode($wr);
    $write = $toJSON == "null" ? 0 : substr(explode(":", $toJSON)[1], 0, strlen(explode(":", $toJSON)[1])-1) ;

    $vb = DB::table('_detail__jawaban')
            ->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
            ->join('_soal_vocabulary','_detail__jawaban.soalnya','=','_soal_vocabulary.soal')
            ->select(DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_vocabulary.`key`,1,NULL)) as vb"))
            ->groupby('_detail__jawaban.npm','mhsdaft.NAMA')->where("_detail__jawaban.npm", $k->NPM)->first();
    $toJSON = json_encode($vb);
    $vocab = $toJSON == "null" ? 0 : substr(explode(":", $toJSON)[1], 0, strlen(explode(":", $toJSON)[1])-1) ;

    $lt = DB::table('_detail__jawaban')
            ->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
            ->join('_soal_listening','_detail__jawaban.soalnya','=','_soal_listening.soal')
            ->select(DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_listening.`key`,1,NULL)) as lt"))
            ->groupby('_detail__jawaban.npm','mhsdaft.NAMA')->where("_detail__jawaban.npm", $k->NPM)->first();
    $toJSON = json_encode($lt);
    $listen = $toJSON == "null" ? 0 : substr(explode(":", $toJSON)[1], 0, strlen(explode(":", $toJSON)[1])-1) ;

    

     $res[] = [
        "NPM"   => $k->NPM,
        "NAMA"  => $k->NAMA,
        "rd"   => $reading,
        "wr"   => $write,
        "vb"    => $vocab,
        "lt"    =>$listen
     ];   
}





$reading = DB::table('_detail__jawaban')
            ->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
            ->join('_soal_write_ekspresion','_detail__jawaban.soalnya','=','_soal_write_ekspresion.soal')
            ->select(DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_write_ekspresion.`key`,1,NULL)) as rd"))
            ->groupby('_detail__jawaban.npm','mhsdaft.NAMA')->where("_detail__jawaban.npm", $k->NPM)->first();
    $toJSON = json_encode($reading);
    $reading = $toJSON == "null" ? 0 : substr(explode(":", $toJSON)[1], 0, strlen(explode(":", $toJSON)[1])-1) ;		 $kosonging= tbpendaftar::doesnthave('ceknpming')->get();

		
		// TPA
         $benar=DB::table('tb_jawab_peserta')
        ->join('mhsdaft','tb_jawab_peserta.npm','=','mhsdaft.NPM')
        ->join('soaltpa', 'tb_jawab_peserta.id_soal', '=', 'soaltpa.id_soal')
        ->select('tb_jawab_peserta.npm','mhsdaft.NAMA', DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`=soaltpa.`jawaban`,1,NULL)) as hasil"), DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`!=soaltpa.`jawaban`,1,NULL)) as salah"), DB::raw("COUNT(tb_jawab_peserta.id_soal) as jumlah"))
        ->groupBy('tb_jawab_peserta.npm','mhsdaft.NAMA')
        ->get();

        $kosong= tbpendaftar::doesnthave('ceknpm')->get();

        $tpa .= '
        
        
    <div class="col-xs-12">
      <div class="box">
        <div class="box-header">
            <center><h3>Hasil Test TPA</h3></center><span><a href="cetak-hasil-tpa" class="btn btn-sm btn-primary">Cetak</a></td></span>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
          <table id="exampletpa" class="table table-bordered table-striped">
            <thead>
            <tr>
              <th width="5%">No.</th>
              <th width="10%" style="text-align: center;">NPM</th>
              <th width="45%" style="text-align: center;">Nama</th>
              <th width="10%" style="text-align: center;">Soal</th>
              <th width="10%" style="text-align: center;">Benar</th>
              <th width="10%" style="text-align: center;">Salah</th>
              <th width="10%" style="text-align: center;">Hasil</th>
            </tr>
            </thead>
            <tbody>';
            $no1 = 0;
            foreach ($benar as $br) {
                $no1++;    
                $tpa .= '
                    <tr>
                    <td style="text-align: center;">'.$no1.'</td>
                    <td style="text-align: center;">'.$br->npm.'</td>
                    <td style="text-align: center;">'.$br->NAMA.'</td>
                    <td style="text-align: center;">'.$br->jumlah.'</td>
                    <td style="text-align: center;">'.$br->hasil.'</td>
                    <td style="text-align: center;">'.$br->salah.'</td>
                    <td style="text-align: center;">'.$br->hasil*'2'.'</td>
                  </tr>
                    ';
            }
            foreach ($kosong as $ing) {
                $no1++;
                $tpa .= '
                <tr style="color: red;">
                <td style="text-align: center;">'.$no1.'</td>
                <td style="text-align: center;">'.$ing->NPM.'</td>
                <td style="text-align: center;">'.$ing->NAMA.'</td>
                <td style="text-align: center;">0</td>
                <td style="text-align: center;">0</td>
                <td style="text-align: center;">0</td>
                <td style="text-align: center;">0</td>
              </tr>
                
                ';
            }
            $tpa .= '
            </tbody>
          </table>
        </div>
      </div>
    </div>

            ';
       $tpa .= '
                      
       <div class="row">
       <div class="col-xs-12">
         <div class="box">
           <div class="box-header">
               <center><h3>Hasil Test B.Inggris</h3></center><span><a href="cetak-hasil-ing" class="btn btn-sm btn-primary">Cetak</a></td></span>
           </div>
           <!-- /.box-header -->
           <div class="box-body">
             <table id="exampleing" class="table table-bordered table-striped">
               <thead>
               <tr>
                 <th width="5%">No.</th>
                 <th width="10%" style="text-align: center;">NPM</th>
                 <th width="45%" style="text-align: center;">Nama</th>
                 <th width="10%" style="text-align: center;">Reading</th>
                 <th width="10%" style="text-align: center;">Write</th>
                 <th width="10%" style="text-align: center;">VOCABULARY</th>
                 <th width="10%" style="text-align: center;">LISTENING</th>
                 <th width="10%" style="text-align: center;">Total</th>
               </tr>
               </thead>
               <tbody>';
               $jml = 0;
               $no = 0;
               for ($i=0; $i < count($res); $i++) {
                       $jml = $res[$i]["rd"] +  $res[$i]["wr"] + $res[$i]["vb"] + $res[$i]["lt"];
                       $no++;
                       $tpa .= '
                       <tr>
                       <td style="text-align: center;">'.$no.'</td>
                       <td style="text-align: center;">'.$res[$i]["NPM"].' </td>
                       <td style="text-align: center;">'.$res[$i]["NAMA"].'</td>
                       <td style="text-align: center;">'.$res[$i]["rd"].'</td>
                       <td style="text-align: center;">'.$res[$i]["wr"].'</td>
                       <td style="text-align: center;">'.$res[$i]["vb"].'</td>
                       <td style="text-align: center;">'.$res[$i]["lt"].'</td>
                       <td style="text-align: center;">'.$jml.'</td>
                     </tr>
                       ';
               }
           $tpa .= '
           </tbody>
           </table>
         </div>
       </div>
     </div>
   </div>
           ';

           $tpa .= '
           <script>
           $(function () {
                   $("#exampletpa").DataTable()
                   $("#exampleing").DataTable()
                  
                 })
           </script>
       ';     


       return json_encode([
               'data' => $tpa
               ]);
    }

     public function cetakhasiling()
    {
        $cek = tbpendaftar::all();
// $res[] = "";
    foreach ($cek as $k) {

    $rd = DB::table('_detail__jawaban')
            ->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
            ->join('_soal_reading','_detail__jawaban.soalnya','=','_soal_reading.soal')
            ->select(DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_reading.`key`,1,NULL)) as rd"))
            ->groupby('_detail__jawaban.npm','mhsdaft.NAMA')->where("_detail__jawaban.npm", $k->NPM)->first();
    $toJSON = json_encode($rd);
    $reading = $toJSON == "null" ? 0 : substr(explode(":", $toJSON)[1], 0, strlen(explode(":", $toJSON)[1])-1) ;

    $wr = DB::table('_detail__jawaban')
            ->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
            ->join('_soal_write_ekspresion','_detail__jawaban.soalnya','=','_soal_write_ekspresion.soal')
            ->select(DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_write_ekspresion.`key`,1,NULL)) as wr"))
            ->groupby('_detail__jawaban.npm','mhsdaft.NAMA')->where("_detail__jawaban.npm", $k->NPM)->first();
    $toJSON = json_encode($wr);
    $write = $toJSON == "null" ? 0 : substr(explode(":", $toJSON)[1], 0, strlen(explode(":", $toJSON)[1])-1) ;

    $vb = DB::table('_detail__jawaban')
            ->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
            ->join('_soal_vocabulary','_detail__jawaban.soalnya','=','_soal_vocabulary.soal')
            ->select(DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_vocabulary.`key`,1,NULL)) as vb"))
            ->groupby('_detail__jawaban.npm','mhsdaft.NAMA')->where("_detail__jawaban.npm", $k->NPM)->first();
    $toJSON = json_encode($vb);
    $vocab = $toJSON == "null" ? 0 : substr(explode(":", $toJSON)[1], 0, strlen(explode(":", $toJSON)[1])-1) ;

    $lt = DB::table('_detail__jawaban')
            ->join('mhsdaft','_detail__jawaban.npm','=','mhsdaft.NPM')
            ->join('_soal_listening','_detail__jawaban.soalnya','=','_soal_listening.soal')
            ->select(DB::raw("COUNT(IF(_detail__jawaban.`jwbnya`=_soal_listening.`key`,1,NULL)) as lt"))
            ->groupby('_detail__jawaban.npm','mhsdaft.NAMA')->where("_detail__jawaban.npm", $k->NPM)->first();
    $toJSON = json_encode($lt);
    $listen = $toJSON == "null" ? 0 : substr(explode(":", $toJSON)[1], 0, strlen(explode(":", $toJSON)[1])-1) ;

    

     $res[] = [
        "NPM"   => $k->NPM,
        "NAMA"  => $k->NAMA,
        "rd"   => $reading,
        "wr"   => $write,
        "vb"    => $vocab,
        "lt"    =>$listen
     ];   
}
 
        set_time_limit(300);
        PDF::setOptions(['dpi' => 150, 'Times New Roman' => 'sans-serif']);
        $pdf = PDF::loadView('/backend/hasil/cetak_hasiling', compact('res'));
        return $pdf->stream();
    }

     public function cetakhasiltpa()
    {
         $cetak=DB::table('tb_jawab_peserta')
        ->join('mhsdaft','tb_jawab_peserta.npm','=','mhsdaft.NPM')
        ->join('soaltpa', 'tb_jawab_peserta.id_soal', '=', 'soaltpa.id_soal')
        ->select('tb_jawab_peserta.npm','mhsdaft.nama', DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`=soaltpa.`jawaban`,1,NULL)) as hasil"), DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`!=soaltpa.`jawaban`,1,NULL)) as salah"), DB::raw("COUNT(tb_jawab_peserta.id_soal) as jumlah"))
        ->groupBy('tb_jawab_peserta.npm','mhsdaft.nama')
        ->get();
        set_time_limit(300);
        PDF::setOptions(['dpi' => 150, 'Times New Roman' => 'sans-serif']);
        $pdf = PDF::loadView('/backend/hasil/cetak_hasiltpa', compact('cetak'));
        return $pdf->stream();
    }

}
