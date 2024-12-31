<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;



class CreateProductsTable extends Migration
{

    public function up()
{
    if (!Schema::hasTable('marketproducts')) {
        Schema::create('marketproducts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('price');
            $table->string('category')->nullable();
            $table->integer('quantity')->default(0);
            $table->timestamps();
        });
    }
}

    public function down()
    {
        Schema::dropIfExists('marketproducts');
    }
}


