<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class jaw extends Model
{
    protected $table = "_jawaban";
    protected $fillable = ["npm", "nilai_A", "start", "nilai_B", "nilai_C", "nilai_D"];
}
