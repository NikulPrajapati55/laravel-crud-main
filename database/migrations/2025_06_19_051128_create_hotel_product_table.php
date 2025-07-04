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
        Schema::create('hotel_product', function (Blueprint $table) {
            $table->id();
        $table->string('product_name');
        $table->string('product_category');
        $table->string('product_img');
        $table->decimal('product_price', 8, 2); 
        $table->integer('product_total');
        $table->integer('product_status');
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_product');
    }
};
