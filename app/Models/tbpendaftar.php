<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class tbpendaftar extends Model
{
    //
    protected $table = "tbpendaftar";
    protected $guarded = [];
    public $timestamps = false;

    public function ceknpm(){
    	return $this->hasMany("App\\TbjawabPeserta","npm","NPM");
    }

    public function ceknpming(){
    	return $this->hasMany("App\\det_jaw","npm","NPM");
    }

}
