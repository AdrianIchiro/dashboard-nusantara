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
        Schema::create('product_specific_sub_categories', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id'); // Foreign key ke tabel products
            $table->unsignedBigInteger('specific_sub_category_id'); // Foreign key ke tabel specific_sub_categories

            // Composite Primary Key
            $table->primary(['product_id', 'specific_sub_category_id']);

            // Foreign Key Constraints
            $table->foreign('product_id')->references('product_id')->on('products')->onDelete('cascade');
            $table->foreign('specific_sub_category_id')->references('specific_sub_category_id')->on('specific_sub_categories')->onDelete('cascade');

            $table->timestamps(); // Kolom created_at dan updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_specific_sub_categories');
    }
};
