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
        Schema::create('penilaians', function (Blueprint $table) {
            $table->id();
            $table->foreignId('mahasiswa_id')->constrained()->cascadeOnDelete();
            $table->integer('indikator1');
            $table->integer('indikator2');
            $table->integer('indikator3');
            $table->integer('indikator4');
            $table->integer('indikator5');
            $table->integer('indikator6');
            $table->string('total_point');
            $table->string('nilai_akhir');
            $table->text('prestasi_akademik');
            $table->text('nilai_keislaman');
            $table->text('komentar_interviewer');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penilaians');
    }
};
