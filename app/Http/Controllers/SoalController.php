<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
// use File;
use App\datasoal;

class SoalController extends Controller
{
    public function HalSoal(datasoal $ds){
          $return = [
            "tbsoal"   => $ds->all(),
        ];
        return view('backend/DataSoal/data_soal',  $return);
    }
    public function show()
    {
        // $data_soal=\App\datasoal::all();
        return view('backend/DataSoal/data_soaladd');
    }
    public function save(Request $req, datasoal $ds)
    {
        $req->validate([
            "k_D" => "required",
            "k_I" => "required",
            "k_S" => "required",
            "k_C" => "required"
        ],[
            "required"          => "Tidak boleh kosong"
        ]);

        try {
            $insert = $ds->create([
                "k_D"     => $req->k_D,
                "k_I"     => $req->k_I,
                "k_S"     => $req->k_S,
                "k_C"     => $req->k_C

            ]);
            $status = 1;
            $pesan = "Data berhasil dismpan";
        } catch (Exception $e) {
            //throw $th;
            $status = 2;
            $pesan = "Terjadi Kesalahan ". $e;
        }
        $return = [
            'status'    => $status,
            'pesan'     => $pesan
        ];
        return redirect()->to('admin/soal');
    }
    public function edit (Request $request, datasoal $ds, $id)
    {
        $ds= datasoal::where("Idsoal", $id)->first();
        $return = [
            'tbsoal'   => $ds
        ];
        return view('/backend/DataSoal/data_soaledit', $return);
    }
    public function update(Request $req, datasoal $ds)
    {
        $req->validate([
            "k_D" => "required",
            "k_I" => "required",
            "k_S" => "required",
            "k_C" => "required"
        ],[
            "required"          => "Tidak boleh kosong"
        ]);
        try {
            $update = $ds->where("Idsoal", $req->Idsoal)->update([
                "k_D"     => $req->k_D,
                "k_I"     => $req->k_I,
                "k_S"     => $req->k_S,
                "k_C"     => $req->k_C
            ]);
            $status = 1;
            $pesan = "Data berhasil dismpan";
        } catch (Exception $e) {
            //throw $th;
            $status = 2;
            $pesan = "Terjadi Kesalahan ". $e;
        }
        $return = [
            'status'    => $status,
            'pesan'     => $pesan
        ];
        return redirect()->to("admin/soal");
    }
    public function delete($id, datasoal $ds)
    {
        $dtsoal =datasoal::where("Idsoal",$id)->first();
        $delete = $dtsoal =$ds->where("Idsoal", $id)->delete();
        return redirect()->back();
    }
}
