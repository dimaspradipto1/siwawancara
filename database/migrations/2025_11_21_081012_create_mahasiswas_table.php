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
        Schema::create('mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('kode_pendaftar');
            $table->string('nama_mahasiswa');
            $table->string('jalur_pendaftar');
            $table->string('sistem_kuliah');
            $table->string('prodi_pilihan1');
            $table->string('prodi_pilihan2');
            $table->string('jk');
            $table->string('nowa');
            $table->string('email');
            $table->text('alamat');
            $table->string('status_pekerjaan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mahasiswas');
    }
};
