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
            $table->enum('nama_posyandu', [
                'Posyandu 1 Anggrek - Njetis',
                'Posyandu 2 Flamboyan - Sayangan',
                'Posyandu 3 Riya - Wonorejo',
                'Posyandu 4 Melati - Blimbing 4',
                'Posyandu 5 Dahlia - Blimbing 5',
                'Posyandu 6 Mawar - Blimbing 6',
                'Posyandu 7 Cempaka - Perum Persada Hijau'
            ]);
            $table->string('nama');
            $table->integer('umur_tahun');
            $table->integer('rt');
            $table->integer('rw');
            $table->float('berat_badan');
            $table->float('tinggi_badan');
            $table->float('lemak_perut');
            $table->float('tensi_darah_sistolik');
            $table->float('tensi_darah_diastolik');
            $table->float('gula_darah');
            $table->float('kolesterol');
            $table->float('asam_urat');
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
