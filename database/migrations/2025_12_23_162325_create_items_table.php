<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('description')->nullable();
            $table->integer('price');
            $table->unsignedBigInteger('category_id');
            $table->string('image')->nullable();
            $table->boolean('is_active')->default(true);
            $table->softDeletes();

            $table->foreign('category_id')->references('id')->on('categories');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
