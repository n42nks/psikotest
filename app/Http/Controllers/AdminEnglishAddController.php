<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class AdminEnglishAddController extends Controller
{
    //
    public function petunjuk($id = null) {

        $data = DB::table('_petunjuk')
        ->where('id', '=', $id)
        ->first();

        if($data == null)
        {
            $data = (object)[
                'id' => null,
                'petunjuk' => '',
            ];
        }

        return view('backend/DataSoal/data_petunjuk_eng_add', ['data' => $data]);
    }

    public function sound($id = null) {
        
        $data = DB::table('_sound')
        ->where('id', '=', $id)
        ->first();
        
        if($data == null)
        {
            $data = (object)[
                'id' => null,
                'sound' => '',
            ];
        }

        return view('backend/DataSoal/data_sound_eng_add', ['data' => $data]);
    }

    public function cerita($id = null) {
        
        $data = DB::table('_soal_cerita')
        ->where('id', '=', $id)
        ->first();
        
        if($data == null)
        {
            $data = (object)[
                'id' => null,
                'cerita' => '',
            ];
        }

        return view('backend/DataSoal/data_cerita_eng_add', ['data' => $data]);
    }
    
    public function reading($id = null) {
        
        $data = DB::table('_soal_reading')
        ->where('id_soal', '=', $id)
        ->first();
        
        if($data == null)
        {
            $data = (object)[
                'id_soal' => null,
                'soal' => '',
                'id_petunjuk' => '',
                'id_cerita' => '',
                'opsiA' => '',
                'opsiB' => '',
                'opsiC' => '',
                'opsiD' => '',
                'key' => '',
            ];
        }

        $ceritas = DB::table('_soal_cerita')->get();
        $petunjuks = DB::table('_petunjuk')->get();
        return view('backend/DataSoal/data_reading_eng_add', [
            'ceritas' => $ceritas,
            'petunjuks' => $petunjuks,
            'data' => $data,
        ]);
    }

    public function we($id = null) {
        
        $data = DB::table('_soal_write_ekspresion')
        ->where('id_soal', '=', $id)
        ->first();
        
        if($data == null)
        {
            $data = (object)[
                'id_soal' => null,
                'soal' => '',
                'id_petunjuk' => '',
                'opsiA' => '',
                'opsiB' => '',
                'opsiC' => '',
                'opsiD' => '',
                'key' => '',
            ];
        }
        
        $petunjuks = DB::table('_petunjuk')->get();
        return view('backend/DataSoal/data_we_eng_add', [
            'petunjuks' => $petunjuks,
            'data' => $data,
        ]);
    }
    
    public function vocabulary($id = null) {
        
        $data = DB::table('_soal_vocabulary')
        ->where('id_soal', '=', $id)
        ->first();
        
        if($data == null)
        {
            $data = (object)[
                'id_soal' => null,
                'soal' => '',
                'id_petunjuk' => '',
                'opsiA' => '',
                'opsiB' => '',
                'opsiC' => '',
                'opsiD' => '',
                'key' => '',
            ];
        }

        $petunjuks = DB::table('_petunjuk')->get();
        return view('backend/DataSoal/data_vocabulary_eng_add', [
            'petunjuks' => $petunjuks,
            'data' => $data,
        ]);
    }

    public function listening($id = null) {
        
        $data = DB::table('_soal_listening')
        ->where('id_soal', '=', $id)
        ->first();
        
        if($data == null)
        {
            $data = (object)[
                'id_soal' => null,
                'soal' => '',
                'id_petunjuk' => '',
                'id_sound' => '',
                'opsiA' => '',
                'opsiB' => '',
                'opsiC' => '',
                'opsiD' => '',
                'key' => '',
            ];
        }

        $sounds = DB::table('_sound')->get();
        $petunjuks = DB::table('_petunjuk')->get();
        return view('backend/DataSoal/data_listening_eng_add', [
            'petunjuks' => $petunjuks,
            'sounds' => $sounds,
            'data' => $data,
        ]);
    }
}
