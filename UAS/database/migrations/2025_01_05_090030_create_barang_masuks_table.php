<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('barang_masuk', function (Blueprint $table) {
            $table->increments('id_masuk');
            $table->string('kode_barang', 20);
            $table->integer('jumlah_masuk');
            $table->date('tanggal_masuk');
            $table->string('sumber_barang', 100);
            $table->timestamps();

            // Foreign key ke tabel barang
            $table->foreign('kode_barang')->references('kode_barang')->on('barang')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('barang_masuk');
    }
};
