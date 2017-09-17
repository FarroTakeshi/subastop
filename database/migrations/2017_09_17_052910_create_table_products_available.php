<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProductsAvailable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products_available', function (Blueprint $table) {
            $table->increments('id');
            $table->double('price',6,2);
            $table->integer('product_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('condition_id')->unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products_available');
    }
}
