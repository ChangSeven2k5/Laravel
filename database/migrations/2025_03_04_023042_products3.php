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
       //products
       Schema::create('products3', function (Blueprint $table) {
        $table->increments('id');
        $table->string('name')->unique();
        $table->integer('price');
        $table->string('image');
        $table->unsignedInteger('cate_id');
        $table->foreign('cate_id')->references('id')->on('categories3')->onDelete('cascade');
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
        Schema::dropIfExists('products3');
    }
};