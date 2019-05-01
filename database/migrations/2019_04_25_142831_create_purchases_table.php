<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePurchasesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('purchases', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('order_id')->unique()->unsigned();
            $table->string('name')->nullable();
            $table->string('surname')->nullable();
            $table->string('sity');
            $table->string('street');
            $table->string('building');
            $table->string('flat');
            $table->string('email');
            $table->string('phone');
            $table->string('comment')->nullable();
            $table->tinyInteger('payment_method')->default(1);
            $table->tinyInteger('delivery_method')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->foreign('order_id')->references('id')->on('orders')->onDelete('restrict');
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
        Schema::table('purchases', function (Blueprint $table) {
            $table->dropForeign('purchases_order_id_foreign');
        });
        Schema::dropIfExists('purchases');
    }
}
