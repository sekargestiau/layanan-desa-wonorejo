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
        Schema::create('posyandu_balita', function (Blueprint $table) {
            $table->id();
            $table->enum('nama_posyandu', [
                'Posyandu 1 Anggrek - Jetis',
                'Posyandu 2 Flamboyan - Sayangan',
                'Posyandu 3 Riya - Wonorejo',
                'Posyandu 4 Melati - Blimbing 4',
                'Posyandu 5 Dahlia - Blimbing 5',
                'Posyandu 6 Mawar - Blimbing 6',
                'Posyandu 7 Cempaka - Perum Persada Hijau'
            ]);
            $table->enum('dukuh', [
                'Jetis',
                'Sayangan',
                'Wonorejo',
                'Blimbing',
                'Bangunrejo',
                'Bancakan',
                'Tegalan'
            ]);
            $table->string('nik');
            $table->string('nama');
            $table->string('nama_ortu');
            $table->integer('umur_tahun');
            $table->integer('umur_bulan');
            $table->date('tanggal_lahir');
            $table->integer('rt');
            $table->integer('rw');
            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->float('lingkar_kepala');
            $table->float('lingkar_lengan');
            $table->date('tanggal');
            $table->string('keterangan_lain');
            $table->enum('status_stunting', ['Stunting', 'Tidak Stunting']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posyandu_balita');

    }
};
