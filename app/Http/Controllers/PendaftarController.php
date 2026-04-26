<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\tbpendaftar;
use App\Imports\DaftarImport;
use Excel;
use Carbon\Carbon;
use DB;
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

    public function generateNomorPendaftar()
    {
        // Ambil tahun dan bulan sekarang
        $tahun = Carbon::now()->format('Y');
        $bulan = Carbon::now()->format('m');

        // Ambil nomor urut terakhir dari database
        $lastEntry = DB::table('tbpendaftar')
                        ->whereYear('TGL_DAFTAR', $tahun)
                        ->whereMonth('TGL_DAFTAR', $bulan)
                        ->orderBy('TGL_DAFTAR', 'desc')
                        ->first();

        // Tentukan nomor urut
        if ($lastEntry) {
            $lastNumber = intval(substr($lastEntry->NPM, -3)); // Ambil 3 digit terakhir
            $newNumber = str_pad($lastNumber + 1, 3, '0', STR_PAD_LEFT); // Tambah 1 dan format ke 3 digit
        } else {
            $newNumber = '001'; // Jika belum ada data, mulai dari 001
        }

        // Format akhir: YYYY/MM/NNN
        return "{$tahun}{$bulan}{$newNumber}";
    }

    public function simpanpendaftar(Request $req, tbpendaftar $pd, $status = 0, $pesan = "Terjadi Kesalahan"){
        $req->validate([
            "tgl_daftar"      => "required",
            "nama"      => "required",
            "tmp_lahir"      => "required",
            "tgl_lahir"      => "required",
            "alamat"      => "required",
            "kota"      => "required",
            "telp"      => "required",
            "agama"   => "required",
            "jk"      => "required"
        ],[
            "required"          => "Tidak boleh kosong",
            "numeric"           => "Angka saja"
        ]);

        $nomorPendaftar = $this->generateNomorPendaftar();
        try {
            $insert = $pd->create([
                "NPM"      => $nomorPendaftar,
                "Tgl_daftar"     => $req->tgl_daftar,
                "Nama"      => $req->nama,
                "Tmp_lahir"     => $req->tmp_lahir,
                "Tgl_lahir"     => $req->tgl_lahir,
                "Alamat"     => $req->alamat,
                "Kota"     => $req->kota,
                "Telp"     => $req->telp,
                "Agama"     => $req->agama,
                "Jkelamin"      => $req->jk,
                "Password"  => Carbon::parse($req->tgl_lahir)->format('Ymd')
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
