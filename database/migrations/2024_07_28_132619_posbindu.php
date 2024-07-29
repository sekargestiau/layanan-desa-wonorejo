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
        Schema::create('posbindu', function (Blueprint $table) {
            $table->id();
            $table->enum('nama_posyandu', ['Posyandu Jetis', 'Posyandu Blimbing', 'Posyandu Wonorejo','Posyandu Sayangan','Posyandu Bangunrejo','Posyandu Bancakan','Posyandu Tegalan']);
            $table->string('nama');
            $table->integer('umur_tahun');
            $table->integer('umur_bulan');
            $table->integer('rt');
            $table->integer('rw');
            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->float('lemak_perut');
            $table->float('tensi_darah');
            $table->float('gula_darah');
            $table->float('kolesterol');
            $table->enum('status_perokok', ['Perokok Aktif', 'Perokok Pasif', 'Bukan Perokok']);
            $table->string('riwayat_penyakit');
            $table->date('tanggal');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posbindu');
    }
};
