<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDulieusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dulieus', function (Blueprint $table) {
            $table->increments('id');
            $table->string('img');
            $table->string('category');
            $table->string('title');
            $table->string('by');
            $table->string('createdDay');
            $table->string('createdBy');
            $table->string('view');
            $table->integer('use_id')->unsigned();
            $table->foreign('use_id')->references('id')->on('users')->onUpdate('cascade');
            $table->boolean('trangthai')->default(1);
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
        Schema::dropIfExists('dulieus');
    }
}
