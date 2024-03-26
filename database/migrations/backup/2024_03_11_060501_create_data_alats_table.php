<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_alat', function (Blueprint $table) {
            $table->id();
            $table->string('kode_alat');
            $table->string('nama_alat');
            $table->string('kode_jenis_alat');
            $table->string('foto');
            $table->string('deskripsi');
            $table->integer('jumlah');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data_alat');
    }
};