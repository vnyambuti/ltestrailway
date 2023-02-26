<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateColorsProductsStocksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('colors_products_stocks', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('stock');
            $table->unsignedBigInteger('color_product_id')->nullable();
            $table->foreign('color_product_id')->references('id')->on('colours_products')->onUpdate('cascade')->onDelete('set null');
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
        Schema::dropIfExists('colors_products_stocks');
    }
}
