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
        Schema::create('jasa_prices', function (Blueprint $table) {
            $table->id();
            $table->enum('skala_project', ['kecil', 'sedang', 'besar']);
            $table->unsignedBigInteger('jasa_id');
            $table->integer('durasi_hari');
            $table->unsignedBigInteger('harga');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jasa_prices');
    }
};
