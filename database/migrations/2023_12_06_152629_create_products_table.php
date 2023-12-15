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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('description')->nullable()->default(null);
            $table->integer('price', 8, 2)->nullable()->default(null);
            $table->string('image')->nullable()->default("default.png");
            $table->integer('stock')->nullable()->default(0); 
            $table->boolean('status')->nullable()->default(true); 
            //cle etrangere
            $table->unsignedBigInteger('catagory_id');
            $table->foreign('catagory_id')->references('id')->on('categories');   


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
