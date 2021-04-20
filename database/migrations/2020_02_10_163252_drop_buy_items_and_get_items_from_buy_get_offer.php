e<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DropBuyItemsAndGetItemsFromBuyGetOffer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('offers_buy_get', function (Blueprint $table) {
            $table->dropColumn('buy_items');
        });

        Schema::table('offers_buy_get', function (Blueprint $table) {
            $table->dropColumn('get_items');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('offers_buy_get', function (Blueprint $table) {
            $table->string('buy_items');
            $table->string('get_items');
        });
    }
}
