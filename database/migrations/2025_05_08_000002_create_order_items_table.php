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
        // First make sure the orders table exists
        if (!Schema::hasTable('orders')) {
            Schema::create('orders', function (Blueprint $table) {
                $table->id();
                $table->foreignId('user_id')->constrained()->onDelete('cascade');
                $table->decimal('total', 12, 2);
                $table->string('status')->default('Pending');
                $table->timestamps();
            });
        }

        // Then create the order_items table
        Schema::create('order_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('order_id');
            $table->unsignedBigInteger('jasa_id');
            $table->integer('quantity');
            $table->decimal('price', 12, 2);
            $table->timestamps();
            
            // Add foreign keys after table creation
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('cascade');
            $table->foreign('jasa_id')->references('id')->on('jasas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('order_items');
    }
};