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
        Schema::create('kelompoktani', function (Blueprint $table) {
            $table->uuid('id_kelompoktani')->primary();
            $table->string('nama_ketua');
            $table->string('nama_kelompoktani');
            $table->string('kelengkapan_kelompoktani');
            $table->integer('jumlah_anggota');
            $table->integer('status_kelompoktani');
            $table->text('keterangan');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelompoktani');
    }
};
