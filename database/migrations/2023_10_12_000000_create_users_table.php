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
            $table->id();
            $table->unsignedBigInteger('fk_account_id');
            $table->integer('fk_pet_id');
            $table->integer('fk_cart_id');
            $table->integer('fk_payment_id');
            $table->string('name');
            $table->string('phone');
            $table->text('address');
            $table->timestamps();

            // Constraint Key Definitions
            $table->foreign('fk_account_id')->references('id')->on('accounts')->onDelete('cascade');
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
