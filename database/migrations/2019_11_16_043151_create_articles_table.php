<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->longtext('problem');
            $table->longtext('cause');
            $table->longtext('effect');
            $table->longtext('solution');
            $table->longtext('usage');
            $table->longtext('testimony');
            $table->text('links');
            $table->longtext('conclution');
            $table->integer('product_id')->unsigned();

            //foreign keys
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
        Schema::dropIfExists('articles');
    }
}
