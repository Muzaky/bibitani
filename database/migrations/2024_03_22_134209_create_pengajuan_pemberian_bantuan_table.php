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
        Schema::create('pengajuan_pemberian_bantuan', function (Blueprint $table) {
            $table->uuid('id_pengajuan')->primary();
            $table->string('judul');
            $table->string('proposal');
            $table->string('id_kelompoktani');
            $table->integer('status_pengajuan');
            $table->text('keterangan');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengajuan_pemberian_bantuan');
    }
};
