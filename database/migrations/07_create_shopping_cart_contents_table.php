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
        Schema::create('shopping_cart_content', function (Blueprint $table) {
            $table->foreignId('cart_id')->default(null)->constraint('shopping_carts')->onDelete('cascade');
            $table->foreignId('item_id')->default(null)->constraint('item')->onDelete('cascade');
            $table->integer("item_count");
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
        Schema::dropIfExists('shopping_cart_contents');
    }
};
