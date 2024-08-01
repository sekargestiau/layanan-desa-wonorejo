<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posyandu_lansia', function (Blueprint $table) {
            $table->id();
            $table->enum('nama_posyandu', ['Posyandu Jetis', 'Posyandu Blimbing', 'Posyandu Wonorejo','Posyandu Sayangan','Posyandu Bangunrejo','Posyandu Bancakan','Posyandu Tegalan']);;
            $table->string('nama');
            $table->integer('umur_tahun');
            $table->integer('rt');
            $table->integer('rw');
            $table->float('berat_badan');
            $table->float('tensi_darah_sistolik');
            $table->float('tensi_darah_diastolik');
            $table->date('tanggal');
            $table->string('keterangan_lain');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posyandu_lansia');

    }
};
