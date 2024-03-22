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
        Schema::create('penjadwalan_bantuan', function (Blueprint $table) {
            $table->uuid('id_penjadwalan')->primary();
            $table->string('id_pengajuan');
            $table->string('id_kelompoktani');
            $table->string('dokumentasi_1')->nullable();
            $table->string('dokumentasi_2')->nullable();
            $table->date('tanggal');
            $table->integer('status_penjadwalan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penjadwalan_bantuan');
    }
};
