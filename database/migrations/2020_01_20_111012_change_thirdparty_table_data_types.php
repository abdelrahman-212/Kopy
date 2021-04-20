<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ChangeThirdpartyTableDataTypes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('third_party_user_ids', function (Blueprint $table) {
            // $table->dropColumn('google_user_id');
            $table->text('google_user_id')->nullable()->change();
        });

        Schema::table('third_party_user_ids', function (Blueprint $table) {
            // $table->dropColumn('facebook_user_id');
            $table->text('facebook_user_id')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('third_party_user_ids', function (Blueprint $table) {
            // $table->dropColumn('google_user_id');
            // $table->unsignedBigInteger('google_user_id')->nullable();
        });

        Schema::table('third_party_user_ids', function (Blueprint $table) {
            // $table->dropColumn('facebook_user_id');
            // $table->unsignedBigInteger('facebook_user_id')->nullable();
        });

    }
}
