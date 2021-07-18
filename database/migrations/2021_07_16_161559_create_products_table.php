<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            $table->id('id_product');
            $table->String('name');
            $table->String('description');
            $table->String('type');
            $table->Double('price');
            $table->String('image_path');
            
            $table->unsignedBigInteger('account_id');
            $table->unsignedBigInteger('category_id');

            $table->foreign('account_id')->references('id_account')->on('accounts');
            $table->foreign('category_id')->references('id_category')->on('categories');
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
