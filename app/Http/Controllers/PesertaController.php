<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Auth;
use App\waktu;
use App\TbJawabPeserta;

class PesertaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($idkat)
    {
      $waktu = waktu::where("Id",$idkat)->first();
      session()->put("menit", $waktu->waktu);
      session()->put("detik", "00");

        if (TbJawabPeserta::where('npm', Session()->get('npm'))
                ->where('id_kategori', $idkat)
                ->exists()) {

            return view('frontend.tpa.selesai');

        } else {
            return view('frontend.tpa.index');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        DB::table('tb_jawab_peserta')->insert([
            'npm' => $request->npm,
            'id_soal' => $request->id_soal,
            'jawaban_peserta' => $request->jawaban_soal,
            ]);

        return redirect()->route('soal');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function soal(Request $request)
    {
       $count = DB::table('soaltpa')->count('id_soal');
        if (TbJawabPeserta::where('npm','=',Session()->get('npm'))->exists()){
            $nomor =1;
            $nomor = $nomor+1;
            $id=TbJawabPeserta::where('npm','=',Session()->get('npm'))
            ->orderBy('id_soal','DESC')->first()->id_soal;
            $id = $id+1;

            if ($id>$count) {
                return view('frontend.tpa.selesai');
            }else{
                $soals = DB::table('soaltpa')
                ->join('tb_detail_jawaban','soaltpa.id_soal','=','tb_detail_jawaban.id_soal')
                ->join('tb_kategori','soaltpa.id_kategori','=','tb_kategori.id_kategori')
                ->where('soaltpa.id_soal','=',$id)
                ->get();
            }

        } else {
            $nomor = 1;
            $id=1;
            $soals = DB::table('soaltpa')
            ->join('tb_detail_jawaban','soaltpa.id_soal','=','tb_detail_jawaban.id_soal')
            ->join('tb_kategori','soaltpa.id_kategori','=','tb_kategori.id_kategori')
            ->where('soaltpa.id_soal','=',$id)
            ->get();
        }


        return view('frontend.tpa.soal',compact('soals','id','count'));
    }

    public function selesai()
    {
        return view('frontend.tpa.selesai');
    }

     public function setsession($m, $s){
      session()->put("menit", $m);
      session()->put("detik", $s);
    }

}
