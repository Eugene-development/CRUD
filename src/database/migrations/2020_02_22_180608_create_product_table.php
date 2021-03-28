<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('name');
            $table->string('slug', 255)->nullable();
            $table->text('title')->nullable();
            $table->text('description')->nullable();
            $table->string('size', 255)->nullable();
            $table->string('price', 255)->nullable();
            $table->string('discount', 255)->nullable();
            $table->string('discount_price', 255)->nullable();
            $table->string('unit', 255)->nullable();
            $table->string('warehouse')->default(0);
            $table->boolean('present')->default(0);
            $table->boolean('action')->default(0);
            $table->boolean('sale')->default(0);
            $table->boolean('new')->default(0);
            $table->boolean('bestseller')->default(0);
            $table->string('photo1', 255)->nullable();
            $table->string('photo2', 255)->nullable();
            $table->string('photo3', 255)->nullable();
            $table->string('photo4', 255)->nullable();
            $table->string('photo5', 255)->nullable();

            $table->unsignedBigInteger('user_id');
//            $table->foreign('user_id')->references('id')->on('user');
            $table->unsignedBigInteger('category_id');
//            $table->foreign('category_id')->references('id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product');
    }
}
