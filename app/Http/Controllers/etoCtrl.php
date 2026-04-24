<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Session;
use App\jaw;
use App\det_jaw;
use App\waktu;

class etoCtrl extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }

    public function gdt(){

        // $req = $request->all();
        // $ceklogin = DB::table('tbpendaftar')
        //         ->select('*')
        //         ->where('npm', $req['npm'])
        //         ->where('nama', $req['nama'])
        //         ->get();
        // if(count($ceklogin)<1){
        //         $stt= (object) [
        //                 'status'=>'salah'
        //         ];
        //         return redirect('/');
        // }

        // //var login
        // $dtlogin = (object) [
        //         'npm'=>$ceklogin[0]->npm,
        //         'nama'=>$ceklogin[0]->nama,
        //         'kota'=>$ceklogin[0]->kota,
        //         'sekolah'=>$ceklogin[0]->sekolah
        // ];

        //cek jawab
        $npm = session()->get('npm');
        $cekjwb = DB::table('_jawaban')
                ->select('*')
                ->where('npm', $npm)
                ->get();

        if(count($cekjwb)>0){
            if($cekjwb[0]->nilai_A!=null)
            {

               return redirect('/finish');
            }

        }

        // dd($dtlogin);

        $waktu = waktu::where("kategori", "TEST BAHASA INGGRIS")->first();

        $reading = DB::table('_soal_reading')
                ->join('_petunjuk', '_soal_reading.id_petunjuk', '=', '_petunjuk.id')
                ->join('_soal_cerita', '_soal_reading.id_cerita', '=', '_soal_cerita.id')
                ->orderBy('_petunjuk.id')
                ->orderBy('_soal_cerita.id')
                ->select('_soal_reading.id_soal', '_soal_reading.soal', '_soal_reading.opsiA', '_soal_reading.opsiB', '_soal_reading.opsiC', '_soal_reading.opsiD', '_petunjuk.petunjuk', '_soal_cerita.cerita')
                ->get();
        // echo $reading;

        $writeekspresion = DB::table('_soal_write_ekspresion')
                ->join('_petunjuk', '_soal_write_ekspresion.id_petunjuk', '=', '_petunjuk.id')
                ->orderBy('_petunjuk.id')
                ->select('_soal_write_ekspresion.id_soal', '_soal_write_ekspresion.soal', '_soal_write_ekspresion.opsiA', '_soal_write_ekspresion.opsiB', '_soal_write_ekspresion.opsiC', '_soal_write_ekspresion.opsiD', '_petunjuk.petunjuk')
                ->get();
        // echo $writeekspresion;

        $vocabulary = DB::table('_soal_vocabulary')
                ->join('_petunjuk', '_soal_vocabulary.id_petunjuk', '=', '_petunjuk.id')
                ->orderBy('_petunjuk.id')
                ->select('_soal_vocabulary.id_soal', '_soal_vocabulary.soal', '_soal_vocabulary.opsiA', '_soal_vocabulary.opsiB', '_soal_vocabulary.opsiC', '_soal_vocabulary.opsiD', '_petunjuk.petunjuk')
                ->get();
        // echo $vocabulary;

        $listening = DB::table('_soal_listening')
                ->join('_petunjuk', '_soal_listening.id_petunjuk', '=', '_petunjuk.id')
                ->join('_sound', '_soal_listening.id_sound', '=', '_sound.id')
                ->orderBy('_petunjuk.id')
                ->orderBy('_sound.id')
                ->select('_soal_listening.id_soal', '_soal_listening.soal', '_soal_listening.opsiA', '_soal_listening.opsiB', '_soal_listening.opsiC', '_soal_listening.opsiD', '_petunjuk.petunjuk', '_sound.sound')
                ->get();
        // echo $listening;

        return view('frontend/eto', compact('reading', 'writeekspresion', 'vocabulary', 'listening','waktu'));
    }

    public function simpan(Request $request){
        // dd($request->all());
        // print_r(session()->get('log'));
        $reading = DB::table('_soal_reading')
                ->select('id_soal','key')
                ->get();
        $arrayread = json_decode(json_encode($reading), true);
        // dd($array);
        $jwb = $request->all();
        $istrueread = 0;
        foreach($arrayread as $item){
                // echo $item["id_soal"];
                $id = $item["id_soal"]."_A";
                if ( isset( $jwb[$id] ) ) {
                        // echo $jwb[$id];
                        if(trim(strtolower($jwb[$id]))==trim(strtolower($item["key"]))){
                                $istrueread++;
                        }
                }
                // echo "<br></br>";
        }
        echo "\nSoal Reading Benar = ".$istrueread;
        $write = DB::table('_soal_write_ekspresion')
                ->select('id_soal','key')
                ->get();
        $arraywrite = json_decode(json_encode($write), true);
        $istruewrite = 0;
        foreach($arraywrite as $item){
                $id = $item["id_soal"]."_B";
                if ( isset( $jwb[$id] ) ) {
                        if(trim(strtolower($jwb[$id]))==trim(strtolower($item["key"]))){
                                $istruewrite++;
                        }
                }
        }
        echo "\nSoal Writing Benar = ".$istruewrite;
        $vocab = DB::table('_soal_vocabulary')
                ->select('id_soal', 'key')
                ->get();
        $arrayvocab = json_decode(json_encode($vocab),true);
        $istruevocab = 0;
        foreach($arrayvocab as $item){
                $id = $item["id_soal"]."_C";
                if ( isset( $jwb[$id] ) ) {
                        if(trim(strtolower($jwb[$id]))==trim(strtolower($item["key"]))){
                                $istruevocab++;
                        }
                }
        }
        echo "\nSoal Vocabulary Benar = ".$istruevocab;
        $listen = DB::table('_soal_listening')
                ->select('id_soal', 'key')
                ->get();
        $arraylisten = json_decode(json_encode($listen),true);
        $istruelisten = 0;
        foreach($arraylisten as $item){
                $id = $item["id_soal"]."_D";
                if ( isset( $jwb[$id] ) ) {
                        if(trim(strtolower($jwb[$id]))==trim(strtolower($item["key"]))){
                                $istruelisten++;
                        }
                }
        }
        echo "\nSoal Listen Benar = ".$istruelisten;

        // jaw::create([
        //         "npm" => "111",
        //         "nilai_A" => $istrueread,
        //         "nilai_B" => $istruewrite,
        //         "nilai_C" => $istruevocab,
        //         "nilai_D" => $istruelisten,
        // ]);
        echo "</br>";
        echo "npm : ".$jwb['npm'];
        $up = DB::table('_jawaban')
                ->where('npm', $jwb['npm'])
                ->update([
                        "nilai_A" => $istrueread,
                        "nilai_B" => $istruewrite,
                        "nilai_C" => $istruevocab,
                        "nilai_D" => $istruelisten,
                        ]);
        echo $up;

        foreach($jwb as $key => $value){
                echo $key."=".$value;
                echo "</br>";
                if($key!='npm'){
                        if($key!='_token'){
                                det_jaw::create([
                                        "npm" => $jwb['npm'],
                                        "soalnya" => $key,
                                        "jwbnya" => $value,
                                ]);
                        }
                }
        }

         return redirect('/finish');
    }

    public function go(Request $request){
      // return 'cek0';
        $dt = $request->all();
        $cek = DB::table('_jawaban')
                ->select('*')
                ->where('npm',$dt["npm"])
                ->get();
        if(count($cek)<=0){
        //         DB::table('_jawaban')
        //                 ->where('npm', $dt["npm"])
        //                 ->update([
        //                         'start' => date('Y-m-d H:i:s')
        //                         ]);
        // } else {
                $creat = jaw::create([
                        "npm" => $dt['npm'],
                        "start" => date('Y-m-d H:i:s'),
                        "nilai_A" => null,
                        "nilai_B" => null,
                        "nilai_C" => null,
                        "nilai_D" => null,
                ]);
                $cek[]= (object) $creat;
        }
        return response()->json(['success'=>$cek, 'cek'=>$dt["npm"]]);
    }

    function cek(){
        $jawbananan = DB::table('_detail__jawaban')
                ->select('npm','soalnya','jwbnya')
                ->where('npm','1234')
                ->get();
        $jawbananan = json_decode(json_encode($jawbananan), true);

        $reading = DB::table('_soal_reading')
                ->select('id_soal','key')
                ->get();
        $arrayread = json_decode(json_encode($reading), true);
        // dd($array);
        $jwb = $jawbananan;
        $istrueread = 0;
        foreach($arrayread as $item){
                $id = $item["id_soal"]."_A";
                foreach($jawbananan as $j){
                        if($id==$j['soalnya']){
                                echo str_pad($j['soalnya'],5,"-")."-".$item['key']."=====".$j['jwbnya']."-";

                                if(trim(strtolower($item['key']))==trim(strtolower($j['jwbnya']))){
                                        $istrueread++;
                                        echo 'BENERMUDEWE';
                                }
                                echo '</br>';
                        }
                }
        }

        $write = DB::table('_soal_write_ekspresion')
                ->select('id_soal','key')
                ->get();
        $arraywrite = json_decode(json_encode($write), true);
        $istruewrite = 0;
        foreach($arraywrite as $item){
                $id = $item["id_soal"]."_B";
                foreach($jawbananan as $j){
                        if($id==$j['soalnya']){
                                echo str_pad($j['soalnya'],5,"-")."-".$item['key']."=====".$j['jwbnya']."-";

                                if(trim(strtolower($item['key']))==trim(strtolower($j['jwbnya']))){
                                        $istruewrite++;
                                        echo 'BENERMUDEWE';
                                }
                                echo '</br>';
                        }
                }
        }

        $vocab = DB::table('_soal_vocabulary')
                ->select('id_soal', 'key')
                ->get();
        $arrayvocab = json_decode(json_encode($vocab),true);
        $istruevocab = 0;
        foreach($arrayvocab as $item){
                $id = $item["id_soal"]."_C";
                foreach($jawbananan as $j){
                        if($id==$j['soalnya']){
                                echo str_pad($j['soalnya'],5,"-")."-".$item['key']."=====".$j['jwbnya']."-";

                                if(trim(strtolower($item['key']))==trim(strtolower($j['jwbnya']))){
                                        $istruevocab++;
                                        echo 'BENERMUDEWE';
                                }
                                echo '</br>';
                        }
                }
        }

        $listen = DB::table('_soal_listening')
                ->select('id_soal', 'key')
                ->get();
        $arraylisten = json_decode(json_encode($listen),true);
        $istruelisten = 0;
        foreach($arraylisten as $item){
                $id = $item["id_soal"]."_D";
                foreach($jawbananan as $j){
                        if($id==$j['soalnya']){
                                echo str_pad($j['soalnya'],5,"-")."-".$item['key']."=====".$j['jwbnya']."-";

                                if(trim(strtolower($item['key']))==trim(strtolower($j['jwbnya']))){
                                        $istruelisten++;
                                        echo 'BENERMUDEWE';
                                }
                                echo '</br>';
                        }
                }
        }

        echo "\nSoal Reading Benar = ".$istrueread;
        echo "\nSoal Writing Benar = ".$istruewrite;
        echo "\nSoal Vocabulary Benar = ".$istruevocab;
        echo "\nSoal Listen Benar = ".$istruelisten;
    }


}
