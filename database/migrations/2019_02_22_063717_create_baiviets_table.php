<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBaivietsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('baiviet', function ($table) {
            $table->increments('id');
            $table->string('tieude', 100)->unique();
            $table->string('noidung', 100);
            $table->integer('maloai')->unsigned();
            $table->foreign('maloai')->references('id')->on('loaitin');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('baiviet');
    }
}
