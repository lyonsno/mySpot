<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpotsListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spots_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('spot_id');
            $table->integer('list_id');

            $table->foreign('spot_id')->references('id')->on('spots');
            $table->foreign('list_id')->references('id')->on('lists');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spots_lists');
    }
}
