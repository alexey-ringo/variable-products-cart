<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryGroupproductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_groupproduct', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id')->unsigned()->nullable();
            $table->foreign('category_id')->references('id')
                  ->on('categories')->onDelete('cascade');
            $table->integer('groupproduct_id')->unsigned()->nullable();
            $table->foreign('groupproduct_id')->references('id')
                  ->on('groupproducts')->onDelete('cascade');
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
        Schema::table('category_groupproduct', function (Blueprint $table) {
            $table->dropForeign('category_groupproduct_category_id_foreign');
            $table->dropForeign('category_groupproduct_groupproduct_id_foreign');
        });
        Schema::dropIfExists('category_groupproduct');
    }
}
