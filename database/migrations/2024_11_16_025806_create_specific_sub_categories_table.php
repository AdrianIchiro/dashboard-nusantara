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
        Schema::create('specific_sub_categories', function (Blueprint $table) {
            $table->id('specific_sub_category_id'); // Auto-increment primary key
            $table->string('specific_sub_category_name'); // Nama specific sub-category
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('specific_sub_categories');
    }
};
