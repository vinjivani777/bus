<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentMethodDetail extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payment_method_detail', function (Blueprint $table) {
            $table->bigIncrements('_id');
            $table->integer('payment_method_id')->unsigned();
            $table->string('key');
            $table->string('value');
            //$table->foreign('payment_method_id')->references('_id')->on('payment_method');
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
        Schema::dropIfExists('payment_method_detail');
    }
}
