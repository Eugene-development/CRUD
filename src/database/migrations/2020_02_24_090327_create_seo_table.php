<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->text('title')->nullable();
            $table->text('description')->nullable();

            $table->unsignedBigInteger('menu_id')->nullable();
            $table->foreign('menu_id')->references('id')->on('menu');
            $table->unsignedBigInteger('submenu_id')->nullable();
//            $table->foreign('submenu_id')->references('id')->on('submenu');
            $table->unsignedBigInteger('post_id')->nullable();
//            $table->foreign('post_id')->references('id')->on('post');
            $table->unsignedBigInteger('product_id')->nullable();
            $table->foreign('product_id')->references('id')->on('product');
            $table->unsignedBigInteger('category_id')->nullable();
            $table->foreign('category_id')->references('id')->on('category');

            $table->string('tagable_id', 255)->nullable();
            $table->string('tagable_type', 255)->nullable();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('seo');
    }
}
