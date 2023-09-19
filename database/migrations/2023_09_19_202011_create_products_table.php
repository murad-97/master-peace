<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('styleId');
            $table->foreign('styleId')->references('id')->on('styles');
            $table->unsignedBigInteger('categoryId');
            $table->foreign('categoryId')->references('id')->on('categories');
            $table->integer('discountId');
            $table->string('name');
            $table->string('shortDescription')->nullable();
            $table->text('longDescription')->nullable();
            $table->string('cartDescription')->nullable();
            $table->float('height');
            $table->float('price');
            $table->text('img');
            $table->text('img1')->nullable();
            $table->text('img2')->nullable();
            $table->text('img3')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
