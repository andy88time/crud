<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    public $timestamps = false;
    protected $fillable = ['nim', 'nama', 'hp'];
}
