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
        // Create cafeproducts table
        Schema::create('cafeproducts', function (Blueprint $table) {
            $table->id(); 
            
            $table->string('name'); 
            $table->string('status')->default(true); 
            $table->decimal('price', 10, 2); 
            $table->string('image')->nullable(); 
            $table->integer('menu_id'); 
            $table->timestamps(); 

        });
    }


    public function down(): void
    {
  
        Schema::dropIfExists('cafeproducts');
    }
};
