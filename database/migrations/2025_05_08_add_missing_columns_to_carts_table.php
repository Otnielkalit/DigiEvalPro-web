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
        Schema::table('carts', function (Blueprint $table) {
            if (!Schema::hasColumn('carts', 'quantity')) {
                $table->integer('quantity')->default(1);
            }
            if (!Schema::hasColumn('carts', 'price')) {
                $table->decimal('price', 12, 2);
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            if (Schema::hasColumn('carts', 'quantity')) {
                $table->dropColumn('quantity');
            }
            if (Schema::hasColumn('carts', 'price')) {
                $table->dropColumn('price');
            }
        });
    }
};