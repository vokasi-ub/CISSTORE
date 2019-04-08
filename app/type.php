<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    protected $table = 'type';
    protected $fillabel =['id_type','type_barang'];
    public $timestamps = true;
}