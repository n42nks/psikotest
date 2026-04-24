<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\tbpendaftar;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserRegisteredMail;


class siswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function siswaDaftar(tbpendaftar $tbpendaftar){
        return view('frontend/daftarsiswa');
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
            "nama"      => "required",
            "agama"      => "required",
            "tmp_lahir"      => "required",
            "tgl_lahir"      => "required",
            "alamat"      => "required",
            "jk"      => "required",
            "telp"      => "required",
        ]);

        $nomorPendaftar = $this->generateNomorPendaftar();
        try {
            $insert = $pd->create([
                "NPM"      => $nomorPendaftar,
                "tgl_daftar"     => date('Y-m-d'),
                "Nama"      => $req->nama,
                "Tmp_lahir"     => $req->tmp_lahir,
                "Tgl_lahir"     => $req->tgl_lahir,
                "Alamat"     => $req->alamat,
                "Kota"     => '-',
                "Telp"     => $req->telp,
                "Agama"     => $req->agama,
                "Jkelamin"      => $req->jk,
                "Password"  => Carbon::parse($req->tgl_lahir)->format('Ymd')
            ]);
            $password = Carbon::parse($req->tgl_lahir)->format('Ymd');
            $status = 1;
            $pesan = "Data berhasil dismpan";
            // Mail::to($req->email)->send(new UserRegisteredMail($nomorPendaftar, $password));
        } catch (Exception $e) {
            //throw $th;
            $status = 2;
            $pesan = "Terjadi Kesalahan ". $e;
        }
        $return = [
            'status'    => $status,
            'pesan'     => $pesan
        ];

        return redirect()->to("/pendaftar-login")->with('success', true)
        ->with('nopendaftaran', $nomorPendaftar)
        ->with('password', $password);;
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
        //
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
}
