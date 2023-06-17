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
        Schema::create('beverages', function (Blueprint $table) {
            $table->id();
           
            $table->string('name')->unique();
            
            $table->string('slug')->unique();
            $table->string('short_description')->nullable();
            $table->decimal('regular_price',8,2);
            
            
            $table->enum('stoke_status',['instock','outofstock']);;
           
           
            $table->string('images');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('beverages');
    }
};
