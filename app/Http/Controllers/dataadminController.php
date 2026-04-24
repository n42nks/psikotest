<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\tbadmin;

class dataadminController extends Controller
{
    //
     public function tambah(){
        return view("backend/admin/adminT");
     }
    public function simpanadmin(Request $req, tbadmin $ad, $status = 0, $pesan = "Terjadi Kesalahan"){
        $req->validate([
        	"nama"		=> "required",
            "username"    => "required",
            "password"      => "required"
        ],[
            "required"          => "Tidak boleh kosong",
            "image"             => "Gambar saja",
            "numeric"           => "Angka saja"
        ]);

        try {
            $insert = $ad->create([
            	"nama"     => $req->nama,
                "username"     => $req->username,
                "password"         => md5($req->password)
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

        return redirect()->to("admin/dataadmin");
    }
    public function perUpdate($idAdmin, tbadmin $ad){
        $dAdmin = $ad->where("IdAdmin", $idAdmin)->first();
        $return = [
            'admin'   => $dAdmin
        ];
        return view("backend/admin/adminU", $return);
    }
        public function update1(Request $req, tbadmin $ad, $status = 0, $pesan = "Not Worked"){
        $req->validate([
        	"nama"            => "required",
            "username"        => "required",
            "password"        => "required"
        ],[
            "required"          => "Tidak boleh kosong",
            "numeric"           => "Angka saja"
        ]);
        try {
            $update = $ad->where("IdAdmin", $req->IdAdmin)->update([
            	"nama"         => $req->nama,
            	"username"     => $req->username,
                "password"     => md5($req->password)
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
        return redirect()->to("admin/dataadmin");
    }
    public function hapus($id, tbadmin $ad, $status = 0, $pesan = "Not Worked"){
            $dAdmin =$ad->where("IdAdmin", $id)->first();
            $delete = $dAdmin =$ad->where("IdAdmin", $id)->delete();
            $status = 1;
            $pesan = "Data berhasil dismpan";
        return redirect()->back();
    }
}
