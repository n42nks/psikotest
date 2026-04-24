<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail extends Model
{
   	public $timestamps = false;
   	public $incrementing = false;
    protected $table = 'tb_detail_jawaban';
    protected $fillable = ['id_soal', 'jawaban_soal', 'isi_soal'];
}
