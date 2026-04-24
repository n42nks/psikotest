<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class AdminEnglishDeleteController extends Controller
{
    //
    public function petunjuk($id) {
        $result = DB::table('_petunjuk')
        ->where('id', '=', $id)
        ->delete();
        
        return redirect()->back();
    }

    public function cerita($id) {
        $result = DB::table('_soal_cerita')
        ->where('id', '=', $id)
        ->delete();
        
        return redirect()->back();
    }

    public function sound($id) {
        $result = DB::table('_sound')
        ->where('id', '=', $id)
        ->delete();
        
        return redirect()->back();
    }

    public function reading($id) {
        $result = DB::table('_soal_reading')
        ->where('id_soal', '=', $id)
        ->delete();
        
        return redirect()->back();
    }

    public function we($id) {
        $result = DB::table('_soal_write_ekspresion')
        ->where('id_soal', '=', $id)
        ->delete();
        
        return redirect()->back();
    }
    
    public function vocabulary($id) {
        $result = DB::table('_soal_vocabulary')
        ->where('id_soal', '=', $id)
        ->delete();
        
        return redirect()->back();
    }
    
    public function listening($id) {
        $result = DB::table('_soal_listening')
        ->where('id_soal', '=', $id)
        ->delete();
        
        return redirect()->back();
    }
}
