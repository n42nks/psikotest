<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class soal extends Model
{
    public $timestamps;

    protected $table = "tbsoal";

    protected $fillable = [
   	"Idsoal","soal","k_D","k_I","k_S","k_C"
   ];
}
