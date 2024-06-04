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
            $table->integer('fk_account_id');
            $table->integer('fk_payment_id');
            $table->integer('fk_contact_id');
            $table->integer('fk_address_id');
            $table->timestamp('dateCreated');
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
