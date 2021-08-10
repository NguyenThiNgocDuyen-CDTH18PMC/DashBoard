<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGadgestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gadgests', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('img');
            $table->string('category');
            $table->string('title');
            $table->string('by');
            $table->string('createdDay');
            $table->string('createdBy');
            $table->string('view');
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
        Schema::dropIfExists('gadgests');
    }
}
