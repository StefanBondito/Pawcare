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
        Schema::create('shop_contact', function (Blueprint $table) {
            $table->id();
            $table->string("shop_phone");
            $table->string("shop_email");
            $table->string("shop_twitter")->nullable();
            $table->string("shop_instagram")->nullable();
            $table->string("shop_facebook")->nullable();
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
        Schema::dropIfExists('shop_contact_infos');
    }
};
