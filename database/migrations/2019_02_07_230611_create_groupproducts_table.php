<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGroupproductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('groupproducts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->unique();
            $table->string('slug')->unique();
            $table->boolean('variable')->default(true);
            $table->string('image')->nullable();
            $table->string('sec_image')->nullable();
            $table->string('description')->nullable();
            $table->text('details')->nullable();
            $table->text('details2')->nullable();
            $table->text('details3')->nullable();
            $table->string('meta_title')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('meta_description')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('brand_id')->unsigned()->nullable();
            $table->foreign('brand_id')->references('id')
                  ->on('brands')->onDelete('restrict');
            $table->boolean('hit')->default(false);
            $table->boolean('new')->default(false);
            $table->boolean('on_sale')->default(false);
            $table->boolean('status')->default(true);
            $table->tinyInteger('act_status')->default(1);
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
        Schema::table('groupproducts', function (Blueprint $table) {
            $table->dropForeign('groupproducts_brand_id_foreign');
        });
        Schema::dropIfExists('groupproducts');
    }
}
