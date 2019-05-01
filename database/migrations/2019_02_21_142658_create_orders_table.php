<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('purchase_id')->unique()->unsigned()->nullable();
            $table->integer('user_id')->unsigned()->nullable();
            $table->tinyInteger('status')->default(1);
            $table->unique(['user_id', 'status']);
            //$table->foreign('purchase_id')->references('id')->on('purchases')->onDelete('restrict');
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
        //Schema::table('orders', function (Blueprint $table) {
        //    $table->dropForeign('orders_purchase_id_foreign');
        //});
        Schema::dropIfExists('orders');
    }
}
