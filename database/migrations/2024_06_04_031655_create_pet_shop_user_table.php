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
        Schema::create('pet_shop_user', function (Blueprint $table) {
            $table->id('id');
            $table->foreign('fk_account_id')->references('id')->on('accounts');
            $table->foreign('fk_payment_id')->references('id')->on('payment');
            $table->foreign('fk_contact_id')->references('id')->on('contact');
            $table->foreign('fk_address_id')->references('id')->on('address');
            $table->timestamps('dateCreated');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pet_shop_user');
    }
};
