<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\DB;

class AdminEnglishSaveController extends Controller
{
    //
    public function petunjuk(Request $req)
    {
        $result = DB::table('_petunjuk')
        ->updateOrInsert(
            [
                'id' => $req->id ? $req->id : null
            ],
            [
                'petunjuk' => $req->petunjuk ? $req->petunjuk : null
            ]
        );
        
        return redirect()->to('admin/petunjuk/eng');
    }

    public function sound(Request $req)
    {
        if($req->hasFile('sound'))
        {
            if($req->file('sound')->isValid())
            {
                $sound = base64_encode(file_get_contents($req->file('sound')));
    
                $result = DB::table('_sound')
                ->updateOrInsert(
                    [
                        'id' => $req->id ? $req->id : null
                    ],
                    [
                        'sound' => "$sound"
                    ]
                );
            }
        }
        
        return redirect()->to('admin/sound/eng');
    }

    public function cerita(Request $req)
    {

        $result = DB::table('_soal_cerita')
        ->updateOrInsert(
            [
                'id' => $req->id ? $req->id : null
            ],
            [
                'cerita' => $req->cerita ? $req->cerita : ''
            ]
        );
        
        return redirect()->to('admin/cerita/eng');
    }

    public function reading(Request $req)
    {

        $result = DB::table('_soal_reading')
        ->updateOrInsert(
            [
                'id_soal' => $req->id ? $req->id : null
            ],
            [
                'soal' => $req->soal ? $req->soal : '',
                'id_petunjuk' => $req->id_petunjuk ? $req->id_petunjuk : '',
                'id_cerita' => $req->id_cerita ? $req->id_cerita : '',
                'opsiA' => $req->a ? $req->a : '',
                'opsiB' => $req->b ? $req->b : '',
                'opsiC' => $req->c ? $req->c : '',
                'opsiD' => $req->d ? $req->d : '',
                'key' => $req->key ? $req->key : '',
            ]
        );
        
        return redirect()->to('admin/soal/eng');
    }

    public function we(Request $req)
    {

        $result = DB::table('_soal_write_ekspresion')
        ->updateOrInsert(
            [
                'id_soal' => $req->id ? $req->id : null
            ],
            [
                'soal' => $req->soal ? $req->soal : '',
                'id_petunjuk' => $req->id_petunjuk ? $req->id_petunjuk : '',
                'opsiA' => $req->a ? $req->a : '',
                'opsiB' => $req->b ? $req->b : '',
                'opsiC' => $req->c ? $req->c : '',
                'opsiD' => $req->d ? $req->d : '',
                'key' => $req->key ? $req->key : '',
            ]
        );
        
        return redirect()->to('admin/soal/eng');
    }

    public function vocabulary(Request $req)
    {

        $result = DB::table('_soal_vocabulary')
        ->updateOrInsert(
            [
                'id_soal' => $req->id ? $req->id : null
            ],
            [
                'soal' => $req->soal ? $req->soal : '',
                'id_petunjuk' => $req->id_petunjuk ? $req->id_petunjuk : '',
                'opsiA' => $req->a ? $req->a : '',
                'opsiB' => $req->b ? $req->b : '',
                'opsiC' => $req->c ? $req->c : '',
                'opsiD' => $req->d ? $req->d : '',
                'key' => $req->key ? $req->key : '',
            ]
        );
        
        return redirect()->to('admin/soal/eng');
    }

    public function listening(Request $req)
    {

        $result = DB::table('_soal_listening')
        ->updateOrInsert(
            [
                'id_soal' => $req->id ? $req->id : null
            ],
            [
                'soal' => $req->soal ? $req->soal : '',
                'id_petunjuk' => $req->id_petunjuk ? $req->id_petunjuk : '',
                'id_sound' => $req->id_sound ? $req->id_sound : '',
                'opsiA' => $req->a ? $req->a : '',
                'opsiB' => $req->b ? $req->b : '',
                'opsiC' => $req->c ? $req->c : '',
                'opsiD' => $req->d ? $req->d : '',
                'key' => $req->key ? $req->key : '',
            ]
        );
        
        return redirect()->to('admin/soal/eng');
    }
}
