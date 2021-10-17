<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    protected $table = "dosen_72190339";
    protected $fillable = ['nid','nama','jenis_kelamin','jurusan','bahasa'];
}
