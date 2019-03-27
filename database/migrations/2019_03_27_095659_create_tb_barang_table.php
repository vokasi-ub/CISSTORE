<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_barang', function (Blueprint $table) {
            $table->bigIncrements('id_barang');
            $table->string('id_type');
            $table->string('id_merk');
            $table->string('id_produksi');
            $table->string('nama_barang',100);
            $table->string('asal_produksi',100);
            $table->string('deskripsi',150);
            $table->string('harga',100);
            $table->string('stok',100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_barang');
    }
}
