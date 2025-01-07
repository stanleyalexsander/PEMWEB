<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id_pengguna');
            $table->string('nama_pengguna', 100);
            $table->string('email', 100)->unique();
            $table->string('password', 100);
            $table->string('hak_akses', 20);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pengguna');
    }
};
