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
        Schema::create('shop_contact_infos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("shop_phone");
            $table->string("shop_email");
            $table->string("shop_twitter");
            $table->string("shop_instagram");
            $table->string("shop_facebook");
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
