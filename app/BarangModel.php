<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class BarangModel extends Model
{
    //
    protected $table = 'barang';
    protected $fillabel = ['id','id_type','id_merk','nama_barang','asal_produksi','deskripsi','harga','stok','tanggal_input_data'];
    public $timestamps = true;
}
