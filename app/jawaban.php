<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jawaban extends Model
{
    public $timestamps;
    protected $table = "tbjawaban";

     protected $fillable = [
   		'Idjawab','npm','idsoal','hasil'
   ];
}
