<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = "mahasiswa_72190339";
    protected $fillable = ['nim','nama','jenis_kelamin','jurusan','bahasa'];
}
