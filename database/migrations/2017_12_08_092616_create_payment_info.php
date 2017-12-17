<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaymentInfo extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('payments', function (Blueprint $table) {
             $table->increments('paymentId')->unique() -> nullable(false);
            $table->integer('customerId') -> nullable(false);
            $table->string('address', 1000);
             $table->string('cardNumber', 20);
            $table->integer('month') -> unsigned();
            $table->integer('year') -> unsigned();
            $table->integer('cvv') -> unsigned();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('payments');
    }
}
