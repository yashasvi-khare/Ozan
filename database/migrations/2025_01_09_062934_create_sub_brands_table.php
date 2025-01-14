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
        Schema::create('sub_brands', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('brand_id');
            $table->string('name');
            $table->string('image')->nullable();
            $table->string('rating')->nullable();
            $table->string('discount')->default('0%');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_brands');
    }
};
