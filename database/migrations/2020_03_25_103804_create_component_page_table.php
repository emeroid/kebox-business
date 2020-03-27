<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComponentPageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('component_page', function (Blueprint $table) {
            //
            $table->bigIncrements('component_id')->unsigned();
            $table->bigIncrements('page_id')->unsigned();

            $table->foreign('page_id')->references('id')->on('Page');
            $table->foreign('component_id')->references('id')->on('Component');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('component_page', function (Blueprint $table) {
            //

            Schema::dropIfExists('component_page');
        });
    }
}
