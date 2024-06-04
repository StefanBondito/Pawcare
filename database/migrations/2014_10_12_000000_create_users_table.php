<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('id');
            $table->foreign('fk_account_id')->references('id')->on('accounts');
            $table->foreign('fk_pet_id')->references('id')->on('pet');
            $table->foreign('fk_cart_id')->references('id')->on('cart');
            $table->foreign('fk_address_id')->references('id')->on('address');
            $table->foreign('fk_payment_id')->references('id')->on('payment');
            $table->string('name');
            $table->string('phone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
};
