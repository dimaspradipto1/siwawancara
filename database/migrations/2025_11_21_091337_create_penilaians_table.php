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
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->foreignId('mahasiswa_id')->constrained()->cascadeOnDelete();
            $table->integer('indikator1')->nullable();
            $table->integer('indikator2')->nullable();
            $table->integer('indikator3')->nullable();
            $table->integer('indikator4')->nullable();
            $table->integer('indikator5')->nullable();
            $table->integer('indikator6')->nullable();
            $table->string('total_point')->nullable();
            $table->string('nilai_akhir')->nullable();
            $table->text('prestasi_akademik')->nullable();
            $table->text('nilai_keislaman')->nullable();
            $table->text('komentar_interviewer')->nullable();
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
