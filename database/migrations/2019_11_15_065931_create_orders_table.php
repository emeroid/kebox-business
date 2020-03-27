<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\order;

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
            $table->string('tracking_id')->unique();
            $table->integer('user_id')->unsigned();
            $table->string('full_name');
            $table->string('mobile');
            $table->string('other_mobile')->nullable();
            $table->string('address');
            $table->string('email')->nullable();
            $table->integer('state_id')->unsigned();
            $table->integer('product_id')->unsigned();
            $table->integer('qty');
            $table->string('order_status')->default(order::UNPROCESSED);

            // foreign keys
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('state_id')->references('id')->on('states');
            $table->foreign('product_id')->references('id')->on('products');
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
        Schema::dropIfExists('orders');
    }
}
