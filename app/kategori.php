<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    public $timestamps = false;
	public $incrementing = false;
    protected $table = 'tb_kategori';
    protected $fillable = ['id_kategori', 'kategori', 'ket'];
}
