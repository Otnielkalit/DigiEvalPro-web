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
            if (!Schema::hasColumn('carts', 'user_id')) {
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
            }
            if (!Schema::hasColumn('carts', 'jasa_id')) {
                $table->foreignId('jasa_id')->constrained()->onDelete('cascade');
            }
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            if (Schema::hasColumn('carts', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
            if (Schema::hasColumn('carts', 'jasa_id')) {
                $table->dropForeign(['jasa_id']);
                $table->dropColumn('jasa_id');
            }
        });
    }
};