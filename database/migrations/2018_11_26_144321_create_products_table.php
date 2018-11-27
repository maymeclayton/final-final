<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('product_name', 200);
            $table->string('product_image', 400);
            $table->text('product_description');
            $table->string('product_brand', 200)->nullable();
            $table->integer('product_price');
            // $table->boolean('rented')->nullable;
            $table->unsignedInteger('product_owner');
            $table->foreign('product_owner')->references('id')->on('users');
            //rented by;
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
}
