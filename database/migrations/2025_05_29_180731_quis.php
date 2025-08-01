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
        Schema::create('quis', function (Blueprint $table) {
            $table->id();
            $table->text('judul');
            $table->unsignedInteger('total_soal');
            $table->time('waktu_pengerjaan');
            $table->datetime('deadline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('quis');
    }
};
