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
            $table->integer('groupproduct_id')->unsigned()->nullable();
            $table->foreign('groupproduct_id')->references('id')->on('groupproducts')->onDelete('restrict');
            $table->string('sku')->unique();
            $table->string('name')->nullable();
            $table->json('images')->nullable();
            $table->integer('color_id')->unsigned()->nullable();
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('restrict');
            $table->integer('size_id')->unsigned()->nullable();
            $table->foreign('size_id')->references('id')->on('sizes')->onDelete('restrict');
            $table->integer('quantity');
            $table->boolean('status')->default(true);
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
        Schema::table('products', function (Blueprint $table) {
            $table->dropForeign('products_groupproduct_id_foreign');
            $table->dropForeign('products_color_id_foreign');
            $table->dropForeign('products_size_id_foreign');
        });
        Schema::dropIfExists('products');
    }
}
