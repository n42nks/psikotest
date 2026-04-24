<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tbpendaftar;
use App\Imports\DaftarImport;
use Excel;
class PendaftarController extends Controller
{
    //
     public function index(){
        // return view('Backend/dahsboard');

    }

    public function excel(Request $request)
    {
        //VALIDASI
        $this->validate($request, [
            'file' => 'required|mimes:xls,xlsx'
        ]);

        if ($request->hasFile('file')) {
            $file = $request->file('file'); //GET FILE
            Excel::import(new DaftarImport, $file); //IMPORT FILE
            return redirect()->back()->with(['success' => 'Upload success']);
        }
        return redirect()->back()->with(['error' => 'Please choose file before']);
    }


    public function tambah(){
        return view("backend/daftar/pendaftarT");
     }
    public function simpanpendaftar(Request $req, tbpendaftar $pd, $status = 0, $pesan = "Terjadi Kesalahan"){
        $req->validate([
            "npm"       => "numeric",
            "tgl_daftar"      => "required",
            "gel"      => "required",
            "nama"      => "required",
            "tmp_lahir"      => "required",
            "tgl_lahir"      => "required",
            "jk"      => "required",
            "kota"      => "required",
            "alamat"      => "required",
            "telp"      => "required",
            "agama"   => "required"
        ],[
            "required"          => "Tidak boleh kosong",
            "numeric"           => "Angka saja"
        ]);

        try {
            $insert = $pd->create([
                "NPM"      => $req->npm,
                "TGL_DAFTAR"     => $req->tgl_daftar,
                "GEL_DAFTAR"     => $req->gel,
                "NAMA"      => $req->nama,
                "TMP_LAHIR"     => $req->tmp_lahir,
                "TGL_LAHIR"     => $req->tgl_lahir,
                "JKELAMIN"      => $req->jk,
                "AGAMA"     => $req->agama,
                "ALAMAT1"     => $req->alamat,
                "TELEPON"     => $req->telp,
                "KOTA"     => $req->kota,
                "KD_JURUSAN"  => 6
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

        return redirect()->to("admin/pendaftar");
    }
    public function perUpdate($npm, tbpendaftar $pd){
        $dnpm = $pd->where("npm", $npm)->first();
        $return = [
            'pendaftar'   => $dnpm
        ];
        return view("backend/daftar/pendaftarU", $return);
    }
     public function update1(Request $req, tbpendaftar $pd)
    {
        $req->validate([
            "npm"       => "numeric",
            "nama"      => "required",
            "kota"      => "required",
            "sekolah"   => "required"
        ],[
            "required"          => "Tidak boleh kosong",
            "numeric"           => "Angka saja"
        ]);
        try {
            $update = $pd->where("npm", $req->npm)->update([
                "npm"         => $req->npm,
                "nama"        => $req->nama,
                "kota"        => $req->kota,
                "sekolah"     => $req->sekolah
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
        return redirect()->to("admin/pendaftar");
    }

    public function hapus($npm, tbpendaftar $pd, $status = 0, $pesan = "Not Worked"){
            $dnpm =$pd->where("npm", $pd)->first();
            $delete = $dnnpm =$pd->where("npm", $npm)->delete();
            $status = 1;
            $pesan = "Data berhasil dismpan";
        return redirect()->back();
    }

       public function detail($npm, tbpendaftar $ad){
        $dAdmin = $ad->where("npm", $npm)->first();
        $return = [
            'pendaftar'   => $dAdmin
        ];
        return view("backend/daftar/detailP", $return);
    }
}
