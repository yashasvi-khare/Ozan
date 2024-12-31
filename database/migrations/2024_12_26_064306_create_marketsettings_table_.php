<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::dropIfExists('marketsettings');
        Schema::create('marketsettings', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('value')->nullable();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('marketsettings');
    }

};
