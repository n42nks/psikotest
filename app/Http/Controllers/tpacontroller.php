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
        // dd($request);
        $tpa = SoalTpa::all();
        $npm = session()->get('npm');

        foreach ($tpa as $key) {
            $idSoal = $key->id_soal;
            $idkat = $key->id_kategori;
            $pilihanKey = 'pilihan' . $idSoal;

            if ($request->has($pilihanKey)) {

                TbJawabPeserta::insert([
                    'npm' => $npm,
                    'id_soal' => $idSoal,
                    'id_kategori' => $idkat,
                    'jawaban_peserta' => $request[$pilihanKey],
                ]);
            }
        }
        return redirect('/selesaiTpa')->with(['stssukses' =>1]);
    }
}
