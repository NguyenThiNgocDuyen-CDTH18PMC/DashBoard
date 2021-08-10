<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBinhluansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('binhluans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('use_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->string('noidung');
            $table->boolean('trangthai')->default(1);
            $table->foreign('use_id')->references('id')->on('users')->onUpdate('cascade');
            $table->foreign('post_id')->references('id')->on('dulieus')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('binhluans');
    }
}
