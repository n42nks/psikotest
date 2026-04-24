<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbpendaftar;
use App\Models\tbadmin;
use App\Models\tbhasil;
use App\waktu;
use DB;

class AdminController extends Controller
{
    //
     public function index(){
        // return view('Backend/dahsboard');
        return view('backend/dashboard');
    }
       public function Halpendaftar(tbpendaftar $tbpendaftar){
        $return = [
            "tbpendaftar"   => $tbpendaftar->all(),
        ];
        return view('backend/daftar/data_pendaftar',  $return);
    }
    public function Haladmin(tbadmin $tbadmin){
          $return = [
            "tbadmin"   => $tbadmin->all(),
        ];
        return view('backend/admin/data_admin',  $return);
    }
    public function Halhasil(tbhasil $tbhasil,tbpendaftar $tbpendaftar){
          $return = [
            "tbhasil"   => $tbhasil->all(),
            "tbpendaftar"   => $tbpendaftar->all(),
        ];
        return view('backend/hasil/data_hasil',  $return);
    }
    public function waktu()
    {
      $waktu = waktu::all();
      $kat = DB::table('tb_kategori')->get();      
      return view('backend/admin/waktu',compact('waktu','kat'));
    }
    public function setwaktu(Request $request)
    {
          waktu::create([
            'tanggal' => $request->tanggal,
            'waktu' => $request->waktu,
            'kategori' => $request->kategori

          ]);

        return redirect()->to('admin/waktu')->with(["stslogin" => 1]);
    }
    public function updatewaktu(Request $request,$Id)
    {
        waktu::where("Id",$Id)->update([
          'tanggal' => $request->tanggal,
          'waktu' => $request->waktu,
          'kategori' => $request->kategori
        ]);
        return redirect()->to('admin/waktu')->with(["stslogin" => 1]);
    }
    public function deletewaktu(Request $request, $Id)
    {
      waktu::where("Id",$Id)->delete();
      return redirect()->to('admin/waktu')->with(["stslogin" => 1]);
    }
}
