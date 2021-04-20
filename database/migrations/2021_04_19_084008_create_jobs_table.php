<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title_ar');
            $table->string('title_en');
            $table->longText('description_ar')->nullable();
            $table->longText('description_en')->nullable();
            $table->tinyInteger('status')->default('1');
            $table->longText('brief_description_ar')->nullable();
            $table->longText('brief_description_en')->nullable();
            $table->longText('responsibilities_ar')->nullable();
            $table->longText('responsibilities_en')->nullable();

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
        Schema::dropIfExists('jobs');
    }
}
