<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\SoalTpa;
use App\detail;
use App\det_jaw;
use App\reading;
use DB;
use Auth;
use App\waktu;
use App\TbJawabPeserta;

class disccontroller extends Controller
{
    public function show()
    {
        $disc = soal::all();

        return view('frontend/soaldisc',['disc' =>$disc]);
    }
    public function tambah(Request $request)
    {
        $tpa = SoalTpa::all();
        $npm = session()->get('npm');

        foreach ($tpa as $key) {
            $idSoal = $key->id_soal;
            $ferinKey = 'ferin' . $idSoal;
            $pilihanKey = 'pilihan' . $idSoal;

            // Simpan hanya jika peserta menjawab soal tersebut
            if ($request->has($pilihanKey)) {
                TbJawabPeserta::insert([
                    'npm' => $npm,
                    'id_soal' => $request[$ferinKey],
                    'jawaban_peserta' => $request[$pilihanKey],
                ]);
            }
        }

        return redirect('/finish')->with(['stssukses' =>1]);

    }
    public function english($idkat)
    {
        $tpa = DB::table("soaltpa")
                ->join("tb_kategori","soaltpa.id_kategori",'=',"tb_kategori.id_kategori" )
                ->where('soaltpa.id_kategori',$idkat)->get();
        $waktu = waktu::where("Id",$idkat)->first();
        session()->put("menit", $waktu->waktu);
        session()->put("detik", "00");

        return view('frontend.soaleng',['tpa' =>$tpa]);
    }
    public function kata($idkat)
    {
         $arit1 = DB::table("soaltpa")
                ->join("tb_kategori","soaltpa.id_kategori",'=',"tb_kategori.id_kategori" )
                ->where('soaltpa.id_kategori',$idkat)->get();

        return view('frontend/soaldisc',[
            'arit' => $arit1,
        ]);

    }
    public function hitung($idkat)
    {
         $arit1 = DB::table("soaltpa")
                ->join("tb_kategori","soaltpa.id_kategori",'=',"tb_kategori.id_kategori" )
                ->where('soaltpa.id_kategori',$idkat)->get();

        return view('frontend/soalhitung',[
            'arit' => $arit1,
        ]);

    }
    public function konsen($idkat)
    {
         $arit1 = DB::table("soaltpa")
                ->join("tb_kategori","soaltpa.id_kategori",'=',"tb_kategori.id_kategori" )
                ->where('soaltpa.id_kategori',$idkat)->get();

        return view('frontend/soalkonsen',[
            'arit' => $arit1,
        ]);

    }
    public function nalar($idkat)
    {
         $arit1 = DB::table("soaltpa")
                ->join("tb_kategori","soaltpa.id_kategori",'=',"tb_kategori.id_kategori" )
                ->where('soaltpa.id_kategori',$idkat)->get();

        return view('frontend/soalnalar',[
            'arit' => $arit1,
        ]);

    }
    public function mekanis($idkat)
    {
         $arit1 = DB::table("soaltpa")
                ->join("tb_kategori","soaltpa.id_kategori",'=',"tb_kategori.id_kategori" )
                ->where('soaltpa.id_kategori',$idkat)->get();

        return view('frontend/soalmekanis',[
            'arit' => $arit1,
        ]);

    }
    public function loveFerin(Request $request)
    {

        $reading = DB::table('_soal_reading')->where("id_cerita",1)->get();
        $reading2 = DB::table('_soal_reading')->where("id_cerita",2)->get();
        $reading3 = DB::table('_soal_reading')->where("id_cerita",3)->get();
        $write = DB::table('_soal_write_ekspresion')->where("id_petunjuk",2)->get();
        $vocabulary = DB::table('_soal_vocabulary')->where("id_petunjuk",4)->get();
        $listening  = DB::table('_soal_listening')->where("id_petunjuk",5)->where("id_sound",1)->get();

        $npm = session()->get('npm');
        // 'hasil' => $request['pilihan'.$key->Idsoal]

        foreach($reading as $read)
        {
            det_jaw::insert([
                'npm' => $npm,
                'soalnya' =>  $request['reading'.$read->id_soal],
                'jwbnya' => $request[$read->id_soal.'_A']
            ]);




        }


        foreach($reading2 as $read)
        {


            det_jaw::insert([
                'npm' => $npm,
                'soalnya' => $request['reading'.$read->id_soal],
                'jwbnya' => $request[$read->id_soal.'_A']

            ]);


        }
        foreach($reading3 as $read)
        {

            det_jaw::insert([
                'npm' => $npm,
                'soalnya' => $request['reading'.$read->id_soal],
                'jwbnya' => $request[$read->id_soal.'_A']
            ]);

        }
        $no = 16;
        foreach ($write as $write) {
            $no++;
            det_jaw::insert([
                'npm' => $npm,
                'soalnya' => $request['write'.$no],
                'jwbnya' => $request[$no.'_B']
            ]);
        }
        $no1 = 26;
        foreach ($vocabulary as $v) {
            $no1++;
            det_jaw::insert([
                'npm' => $npm,
                'soalnya' => $request['vac'.$no1],
                'jwbnya' => $request[$no1.'_C']
            ]);

        }
        $no2 = 36;
        foreach ($listening as $l) {
            $no2++;
            det_jaw::insert([
                'npm' => $npm,
                'soalnya' => $request['lis'.$no2],
                'jwbnya' => $request[$no2.'_D']
            ]);

        }

        return redirect('/finish');


    }

}
