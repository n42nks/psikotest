<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SoalTpa extends Model
{
	public $timestamps = false;
	public $incrementing = false;
    protected $table = 'soaltpa';
    protected $primaryKey = 'id_soal';
    protected $fillable = ['id_soal', 'soal', 'jawaban','idkategori','A','B','C','D'];
}
