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
        // Table already exists, so we do nothing
        if (!Schema::hasTable('carts')) {
            Schema::create('carts', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->foreignId('jasa_id')->constrained()->onDelete('cascade');
                $table->integer('quantity')->default(1);
                $table->decimal('price', 12, 2);
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // We don't want to drop the table here since it might be used by other migrations
        // Schema::dropIfExists('carts');
    }
};