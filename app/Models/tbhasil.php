<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbhasil extends Model
{
    //
    protected $table = "tbjawaban";
    protected $guarded = [];
    public $timestamps = false;
    
     public function getnama(){
    	return $this->belongsTo("App\\Models\\tbpendaftar","npm","NPM");
    }
}
