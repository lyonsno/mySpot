<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompilationSpotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('compilation_spot', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('spot_id')->unsigned();
            $table->integer('compilation_id')->unsigned();

            $table->foreign('spot_id')->references('id')->on('spots')->onDelete('cascade');
            $table->foreign('compilation_id')->references('id')->on('compilations')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('compilation_spot');
    }
}
