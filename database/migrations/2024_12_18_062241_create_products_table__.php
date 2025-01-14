<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateProductsTable extends Migration
{

    public function up()
    {
        Schema::dropIfExists('marketproducts');
        Schema::create('marketproducts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->string('picture');
            $table->string('price');
            $table->string('category')->nullable();
            $table->bigInteger('brand_id');
            $table->bigInteger('sub_brand_id')->nullable();
            $table->integer('quantity')->default(50);
            $table->string('discount')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('marketproducts');
    }
}


