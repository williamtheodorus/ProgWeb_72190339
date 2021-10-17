<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = "contact_72190339";
    protected $fillable = ['alamat','kota','telepon','fax','email'];
}
