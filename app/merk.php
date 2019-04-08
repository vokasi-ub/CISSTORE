<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class merk extends Model
{
    protected $table = 'merk';
    protected $fillabel =['id_merk','merk'];
    public $timestamps = true;
}