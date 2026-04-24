<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class det_jaw extends Model
{
    protected $table = "_detail__jawaban";
    protected $fillable = ["npm", "soalnya", "jwbnya"];
}
