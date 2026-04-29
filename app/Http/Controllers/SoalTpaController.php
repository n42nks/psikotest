<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use App\SoalTpa;
use App\detail;
use App\kategori;
use App\TbJawabPeserta;
use App\Models\tbpendaftar;
use PDF;
class SoalTpaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $select = DB::select('select * from soaltpa');
        return view ('backend.DataSoalTpa.DaftarSoal')->with('soal',$select);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $kategori = DB::select('select * from tb_kategori');
        $select = DB::select('SELECT * FROM soaltpa order by id_soal DESC limit 1');
        return view('backend.DataSoalTpa.TambahSoal',['Soal' => $select,'kategori' => $kategori]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kategori' => 'required|not_in:Pilih Kategori',
            'soal' => 'required',
            'A' => 'required',
            'B' => 'required',
            'C' => 'required',
            'D' => 'required',
            'jawaban' => 'required|in:A,B,C,D',
        ], [
            'id_kategori.required' => 'Kategori wajib dipilih',
            'id_kategori.not_in' => 'Kategori harus dipilih',
            'soal.required' => 'Soal tidak boleh kosong',
            'A.required' => 'Jawaban A wajib diisi',
            'B.required' => 'Jawaban B wajib diisi',
            'C.required' => 'Jawaban C wajib diisi',
            'D.required' => 'Jawaban D wajib diisi',
            'jawaban.required' => 'Kunci jawaban wajib diisi',
            'jawaban.in' => 'Kunci jawaban harus A/B/C/D',
        ]);

        $data2[] = array(
            'soal' => $request->input('soal'),
            'jawaban' => $request->input('jawaban'),
            'id_kategori' => $request->input('id_kategori'),
            'A' => $request->input('A'),
            'B' => $request->input('B'),
            'C' => $request->input('C'),
            'D' => $request->input('D'),
        );
        DB::table('soaltpa') -> insert($data2);


        $select = DB::select('select * from soaltpa');
        return view ('backend.DataSoalTpa.DaftarSoal')->with('soal',$select);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $Soal = SoalTpa::find($id);
        $kategori = kategori::all();

        return view('backend.DataSoalTpa.UbahSoal', ['Soal'=>$Soal, 'kategori'=>$kategori]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Soal = SoalTpa::find($request->input('id_soal'));
        $Soal->soal = $request->input('soal');
        $Soal->jawaban = $request->input('jawaban');
        $Soal->A = $request->input('A');
        $Soal->B = $request->input('B');
        $Soal->C = $request->input('C');
        $Soal->D = $request->input('D');
        $Soal->update();

        $select = DB::select('select * from soaltpa');
        return view ('backend.DataSoalTpa.DaftarSoal')->with('soal',$select);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_soal)
    {
        DB::table('soaltpa')->where("id_soal",$id_soal)->delete();

        return redirect('/admin/soal-tpa')->with(["stslogin" => 1]);
    }


    public function delete($id, SoalTpa $st,detail $dt){
        // $Soal = SoalTpa::find($request->input('id_soal'));
        // $Soal->delete();
        // return redirect()->route('backend.DataSoalTpa.DaftarSoal');

        $Soal =SoalTpa::where("id_soal",$id)->first();
        $delete = $Soal =$st->where("id_soal", $id)->delete();
        $detail = detail::where("id_soal",$id)->first();
        $deletedetail = $detail=$dt->where("id_soal",$id)->delete();
        return redirect()->back();
    }
    public function tampilhasiltpa()
    {
         $benar=DB::table('tb_jawab_peserta')
        ->join('mhsdaft','tb_jawab_peserta.npm','=','mhsdaft.NPM')
        ->join('soaltpa', 'tb_jawab_peserta.id_soal', '=', 'soaltpa.id_soal')
        ->select('tb_jawab_peserta.npm','mhsdaft.NAMA', DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`=soaltpa.`jawaban`,1,NULL)) as hasil"), DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`!=soaltpa.`jawaban`,1,NULL)) as salah"), DB::raw("COUNT(tb_jawab_peserta.id_soal) as jumlah"))
        ->groupBy('tb_jawab_peserta.npm','mhsdaft.NAMA')
        ->get();
       return view('backend.hasiltpa.data_hasiltpa', compact('benar'));
    }
     public function tampildetailhasiltpa($id)
    {
         $benarr=DB::table('tb_jawab_peserta')
        ->join('tbpendaftar','tb_jawab_peserta.npm','=','tbpendaftar.npm')
        ->join('soaltpa', 'tb_jawab_peserta.id_soal', '=', 'soaltpa.id_soal')
        ->select('*')
        ->where('tb_jawab_peserta.npm','=',$id)
        // ->groupBy('tb_jawab_peserta.Notest','tbpendaftar.nama')
        ->get();

       return view('backend.hasiltpa.detail_hasiltpa', compact('benarr'));
    }
    public function cetakhasiltpa($id)
    {
         $cetak=DB::table('tb_jawab_peserta')
        ->join('mhsdaft','tb_jawab_peserta.npm','=','mhsdaft.NPM')
        ->join('soaltpa', 'tb_jawab_peserta.id_soal', '=', 'soaltpa.id_soal')
        ->select('tb_jawab_peserta.npm','mhsdaft.nama', DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`=soaltpa.`jawaban`,1,NULL)) as hasil"), DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`!=soaltpa.`jawaban`,1,NULL)) as salah"), DB::raw("COUNT(tb_jawab_peserta.id_soal) as jumlah"))
        ->where('tb_jawab_peserta.npm','=',$id)
        ->groupBy('tb_jawab_peserta.npm','mhsdaft.nama')
        ->get();
        set_time_limit(300);
        PDF::setOptions(['dpi' => 150, 'Times New Roman' => 'sans-serif']);
        $pdf = PDF::loadView('/backend/hasiltpa/cetak_hasiltpa', compact('cetak'));
        return $pdf->stream();
    }
}
