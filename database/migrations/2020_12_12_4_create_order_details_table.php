<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrderDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('order_details', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('order_id')->unsigned();
            $table->foreign('order_id')->references('id')->on('orders');

            $table->unsignedInteger('film_id')->unsigned();
            $table->foreign('film_id')->references('id')->on('films');
            
            $table->unsignedInteger('count_film');
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
        Schema::dropIfExists('order_details');
    }
}
