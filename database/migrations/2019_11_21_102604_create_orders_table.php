<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('customer_id')->index();
            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('branch_id')->index();
            $table->foreign('branch_id')->references('id')->on('branches');
            $table->enum('service_type', ['takeaway', 'delivery']);
            // $table->bigInteger('address_id')->unsigned();
            // $table->foreign('address_id')->references('id')->on('addresses');

            $table->double('subtotal');
            $table->double('taxes');
            $table->double('delivery_fees')->nullable();
            $table->double('total');

            $table->enum('state', ['pending', 'rejected', 'in-progress', 'completed', 'canceled']);
            $table->timestamps();
            $table->unsignedBigInteger('created_by')->index()->nullable();
            $table->foreign('created_by')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('updated_by')->index()->nullable();
            $table->foreign('updated_by')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
