<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Session;
use App\soal;
use App\jawaban;
use App\Models\tbpendaftar;
use App\TbJawabPeserta;
use App\waktu;
use Illuminate\Support\Facades\Crypt;
use App\det_jaw;
use DB;

class frontendController extends Controller
{
  public function show()
  {

          $soal = soal::all();
          $jml = soal::count();

      return view('frontend/newsoal', ['soal' => $soal, 'jmlsoal' => $jml]);
  }
  public function show2()
  {
      $tbsoal = soal::all();



      return view('frontend/newsoal1')->with('tbsoal');
  }

  public function next($Idsoal)
  {

    $soal1 = "";
    $jml = soal::all();

    $total = $jml->count();
    $disc = ["k_D", "k_I", "k_S", "k_C"];
    shuffle($disc);

    // $angka = session()->get('angka');
    // $nomer = $angka + 1;

    // session()->put("angka",$nomer);



    $i = 0;

    do {
      $soal = soal::where("Idsoal", $Idsoal)->count();
      if ($soal > 0) {
        $soal = soal::where("Idsoal", $Idsoal)->get();
        $i = 1;
      } else {
        $Idsoal = $Idsoal + 1;
      }
    } while ($i == 0);

    $no = 1;

    foreach ($soal as $s) {
      $soal1 .= '
                <input type="text" name="jmlsoal" value="' . $total . '" id="jmlsoal" hidden="true">
          <input type="hidden" name="" value="' . $s->Idsoal . '" id="Idsoal">';
      foreach ($disc as $acak) {
        $soal1 .= '<div class="col-md-12">

                <div style="margin-left: 20px;">
                <label style="font-size: 18px;">
                  <input type="radio" name="pilihan" id="' . $acak . '" value="' . $acak . '" class="radio1">
                    ' . $s->$acak . '
                </label>

              </div>
              </div>';
      }
    }
    return json_encode(['data' => $soal1]);
  }
  public function tambahJawab(Request $request)
  {
    $npm = session()->get('npm');


    $data = jawaban::insert([
      'npm' => $npm,
      'idsoal' => $request->Idsoal,
      'hasil'  => $request->pilihan
    ]);

    return json_encode($data);
  }
  public function cobasoal(Request $request)
  {
          $npm = session()->get('npm');
          // $angka = session()->get('angka');
          $Idsoal = $request->Idsoal;
          $max = soal::max('Idsoal');
          $i = 0;


          do {
            $soal = soal::where("Idsoal", $Idsoal)->count();

            if ($soal > 0) {
              $soal = soal::where("Idsoal", $request->Idsoal)->firstOrFail();
              $i = 1;
            } else {
              $Idsoal = $Idsoal + 1;
            }
          } while ($i == 0);

          //  $soal = soal::where("Idsoal",$request->Idsoal)->firstOrFail();
           $next = soal::where('Idsoal', '>', $soal->Idsoal)
              ->orderBy('Idsoal', 'ASC')
              ->first();



          jawaban::insert([
            'npm' => $npm,
            'Idsoal' => $request->Idsoal,
            'hasil' => $request->pilihan
          ]);

          if ($soal->Idsoal == $max) {
            return redirect('/selesai');
          }
          else {
            return redirect('/soal-disc/'.$next->Idsoal);
          }


  }

  public function login(Request $request)
  {

    $this->validate($request, [
      "npm"      => "required",
      "nama"    => "required"
    ], [
      "required"         => "Tidak boleh kosong"
    ]);

    $npm = $request->npm;
    $nama = $request->nama;

    $jawaban = TbJawabPeserta::where("npm", $npm);
    $data = tbpendaftar::where("NPM", $npm)->where("Password", $nama);

    $statusTestSelesai = DB::table('tb_jawab_peserta')
                        ->where('npm', session('npm'))
                        ->count() >= 6; // contoh: sudah jawab semua 20 soal

    if ($data->count() > 0) {
      $data = $data->first();

      session()->put("nama", $data["Nama"]);
      session()->put("tgl", $data["Tgl_lahir"]);
      session()->put("tmp", $data["Alamat"]);
      session()->put("npm", $data["NPM"]);
      session()->put("login", TRUE);

      session()->put("status_test_selesai", $statusTestSelesai);

      return redirect()->to('/pilihsoal')->with(["stslogin" => 1]);
    } else {
      return redirect()->to('/')->with(["stslogin" => 2]);
    }
  }
  public function logout()
  {
    Session::flush();
    return redirect('/');
  }
  public function welcome()
  {
    return view('frontend/landing');
  }
  public function masuk(){
    return view('frontend.welcome');
  }
  public function konfirmasi($idkat)
  {

    $waktu = waktu::where("Id",$idkat)->first();
    session()->put("menit", $waktu->waktu);
    session()->put("detik", "00");
    $npm = session()->get('npm');


    // $bing = det_jaw::where("npm",$npm);
    $data = tbpendaftar::where("NPM", $npm);

    $tpa = TbJawabPeserta::where("npm",$npm);
    $bing = DB::table('soaltpa')
                ->join('tb_jawab_peserta','soaltpa.id_soal','=','tb_jawab_peserta.id_soal')
                ->where('tb_jawab_peserta.npm','=',$npm)->where('soaltpa.id_kategori',$idkat)
                ->get();

    if ($data->count() > 0) {
        $data = $data->first();
          if ($bing->count() > 0) {

            $bing = $bing->first();
            if ($data["NPM"] == $bing["npm"]) {
              return redirect('/finish');
            }
          }

          if ($tpa->count() > 0)
          {
              if($bing->count() > 0)
              {
                  return view('frontend/konfirmasi');
              }
              else {

                  return redirect('/pilihsoal')->with(["stsbig" => 3]);
              }
          }
          else {
                return redirect('/pilihsoal')->with(["ststpa" => 1]);
          }

    }

    return view('frontend/konfirmasi');
  }
  public function saveakhir(Request $request, $Idsoal)
  {

    $npm = session()->get('npm');
    jawaban::where("Idsoal", $Idsoal)->insert([
      'npm' => $npm,
      'idsoal' => $request->Idsoal,
      'hasil'  => $request->pilihan
    ]);

    return redirect('/selesai');
  }

  public function setsession($m, $s)
  {
    session()->put("menit", $m);
    session()->put("detik", $s);
  }
  public function ferin($cintah)
  {

    session()->put("angka",$cintah);

  }


  public function soal($Idsoal)
  {
    $soal = soal::where("Idsoal", $Idsoal)->first();

    $next = soal::where('Idsoal', '>', $soal->Idsoal)
      ->orderBy('Idsoal', 'ASC')->first();

    $max = soal::max('Idsoal');


    return view('frontend/cobasoal', compact('soal', 'next','max'));
  }


  public function show1()
  {



  }

  public function next2($Idsoal)
  {


      $soalNext = DB::table("tbsoal")->where("Idsoal",$Idsoal)->get();


      return json_encode($soalNext);


  }

  public function konfiramsiE($idkat)
  {
        $waktu = waktu::where("Id",$idkat)->first();
        session()->put("menit", $waktu->waktu);
        session()->put("detik", "00");

        if (TbJawabPeserta::where('npm', Session()->get('npm'))
                ->where('id_kategori', $idkat)
                ->exists()) {

            return view('frontend.tpa.selesai');

        } else {
            return view('frontend/engliskonfirmasi');
        }
  }

  public function konfirmasikata($idkat)
  {

        $waktu = waktu::where("Id",$idkat)->first();
        session()->put("menit", $waktu->waktu);
        session()->put("detik", "00");

        if (TbJawabPeserta::where('npm', Session()->get('npm'))
                ->where('id_kategori', $idkat)
                ->exists()) {

            return view('frontend.tpa.selesai');

        } else {
            return view('frontend.konfirmasi');
        }
  }
  public function konfirmasihitung($idkat)
  {
        $waktu = waktu::where("Id",$idkat)->first();
        session()->put("menit", $waktu->waktu);
        session()->put("detik", "00");

        if (TbJawabPeserta::where('npm', Session()->get('npm'))
                ->where('id_kategori', $idkat)
                ->exists()) {

            return view('frontend.tpa.selesai');

        } else {
            return view('frontend.konfirmhitung');
        }
  }

  public function konfirmasikonsen($idkat)
  {
        $waktu = waktu::where("Id",$idkat)->first();
        session()->put("menit", $waktu->waktu);
        session()->put("detik", "00");

        if (TbJawabPeserta::where('npm', Session()->get('npm'))
                ->where('id_kategori', $idkat)
                ->exists()) {

            return view('frontend.tpa.selesai');

        } else {
            return view('frontend.konfirmkonsen');
        }
  }
  public function konfirmasinalar($idkat)
  {
    $waktu = waktu::where("Id",$idkat)->first();
        session()->put("menit", $waktu->waktu);
        session()->put("detik", "00");

        if (TbJawabPeserta::where('npm', Session()->get('npm'))
                ->where('id_kategori', $idkat)
                ->exists()) {

            return view('frontend.tpa.selesai');

        } else {
            return view('frontend.konfirmnalar');
        }
  }
  public function konfirmasimekanis($idkat)
  {
    $waktu = waktu::where("Id",$idkat)->first();
    session()->put("menit", $waktu->waktu);
    session()->put("detik", "00");
    $npm = session()->get('npm');

    $data = tbpendaftar::where("NPM", $npm)->get();
    $tpa = TbJawabPeserta::where("npm",$npm)->get();
    $bing = DB::table('soaltpa')
                ->join('tb_jawab_peserta','soaltpa.id_soal','=','tb_jawab_peserta.id_soal')
                ->where('tb_jawab_peserta.npm','=',$npm)->where('soaltpa.id_kategori',$idkat)
                ->get();

    if ($data->count() > 0) {
      $data = $data->first();
          if ($bing->count() > 0) {

            $bing = $bing->first();
            if ($data->NPM == $bing->npm) {
              return redirect('/finish');
            }
          }

         if ($tpa->count() > 0)
            {
                return view('frontend/konfirmmekanis');

            }
            else {

                  return redirect('/pilihsoal')->with(["ststpa" => 1]);
            }

      }

    return view('frontend/konfirmmekanis');
  }
//   public function Halhasil(TbJawabPeserta $tbhasil){
//       $npm = session()->get('npm');
//       $data = tbpendaftar::where("NPM", $npm)->get();
//       $return = [
//           "tbhasil"   => $tbhasil->all(),
//           "tbpendaftar"   => $data,
//       ];

//       return view('frontend/data_hasil',  $return);
//   }

  public function Halhasil(Request $request)
    {
        $npm = session()->get('npm');

        $peserta = DB::table('tbpendaftar')->where('npm', $npm)->first();

        $hasilPerKategori = DB::table('tb_jawab_peserta as j')
        ->join('soaltpa as s', 'j.id_soal', '=', 's.id_soal')
        ->join('tb_kategori as k', 's.id_kategori', '=', 'k.id_kategori')
        ->select(
            'k.id_kategori',
            'k.kategori as kategori',
            DB::raw('COUNT(s.id_soal) as jumlah'),
            DB::raw('SUM(CASE WHEN j.jawaban_peserta = s.jawaban THEN 1 ELSE 0 END) as hasil'),
            DB::raw('SUM(CASE WHEN j.jawaban_peserta != s.jawaban THEN 1 ELSE 0 END) as salah')
        )
        ->where('j.npm', $npm)
        ->groupBy('k.id_kategori', 'k.kategori') // 🔥 wajib
        ->orderBy('k.id_kategori', 'ASC') // 🔥 ini yang kamu mau
        ->get();

        return view('frontend.data_hasil', [
            'npm' => $npm,
            'nama' => $peserta->Nama ?? '-',
            'alamat' => $peserta->Alamat ?? '-',
            'telp' => $peserta->Telp ?? '-',
            'hasilPerKategori' => $hasilPerKategori
        ]);
    }

  public function ceknpm(Request $req)
  {
        $npm = $req->query('npm');

        $jumlah=0; $salah = 0;$hasil=0;
        $result2 = DB::table('tb_jawab_peserta')->where('npm', '=', $npm)->first();

        if($result2){
         $benar=DB::table('tb_jawab_peserta')
          ->join('mhsdaft','tb_jawab_peserta.npm','=','mhsdaft.NPM')
          ->join('soaltpa', 'tb_jawab_peserta.id_soal', '=', 'soaltpa.id_soal')
          ->join('tb_kategori', 'soaltpa.id_kategori', '=', 'tb_kategori.id_kategori') // asumsi nama tabel dan kolom
          ->select(
              'tb_jawab_peserta.npm',
              'mhsdaft.NAMA',
              'tb_kategori.kategori','tb_kategori.id_kategori', // tambahkan kategori di select
              DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`=soaltpa.`jawaban`,1,NULL)) as hasil"),
              DB::raw("COUNT(IF(tb_jawab_peserta.`jawaban_peserta`!=soaltpa.`jawaban`,1,NULL)) as salah"),
              DB::raw("COUNT(tb_jawab_peserta.id_soal) as jumlah")
          )
          ->groupBy('tb_jawab_peserta.npm', 'mhsdaft.NAMA', 'tb_kategori.kategori','tb_kategori.id_kategori') // tambahkan group by kategori
          ->orderBy('tb_kategori.id_kategori')
          ->get();

          $hasilPerKategori = $benar->where('npm', $npm);

        }

        $table = '<div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Hasil Online Test</h3>
                    </div>
                    <div class="box-body">';

        foreach ($hasilPerKategori as $row) {
            $table .= '
                <h4><strong>Online Test  '.htmlspecialchars($row->kategori).'</strong></h4>
                <div class="row">
                    <div class="col-sm-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-red">S</span>
                            <div class="info-box-content">
                                <span class="info-box-text">SOAL</span>
                                <span class="info-box-number">'.$row->jumlah.'</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-yellow">B</span>
                            <div class="info-box-content">
                                <span class="info-box-text">BENAR</span>
                                <span class="info-box-number">'.$row->hasil.'</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-green">S</span>
                            <div class="info-box-content">
                                <span class="info-box-text">SALAH</span>
                                <span class="info-box-number">'.$row->salah.'</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="info-box">
                            <span class="info-box-icon bg-aqua">H</span>
                            <div class="info-box-content">
                                <span class="info-box-text">HASIL</span>
                                <span class="info-box-number">'.($row->hasil).'</span>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>';
        }
        $table .='
              <center>
						    <a  href="/admin/cetak_hasil/'.$npm.'" target="blank"   class="btn btn-primary">Cetak Hasil</a>
							</center>';
        $table .= '</div></div></div></div>';


        return response()->json([
            "status"  => 200,
            "message" => "Berhasil",
            "data"    => $table,
        ]);


  }
}
