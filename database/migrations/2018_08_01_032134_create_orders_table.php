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
            $table->timestamps();
            $table->integer('user_id');
            $table->text('cart');
            $table->text('address');
            $table->string('email');
            $table->string('nombre');
            $table->string('apellido');
            $table->text('addresopt');
            $table->string('rut');
            $table->string('metodo');
            $table->string('comuna');
            $table->string('region');
            $table->integer('telefono');
            $table->integer('total');
            $table->integer('estado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
