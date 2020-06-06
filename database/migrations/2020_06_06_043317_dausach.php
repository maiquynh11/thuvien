<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Dausach extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dausach', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('masach')->unique();
            $table->string('tensach');
            $table->string('tacgia');
            $table->string('maloai');
            $table->foreign('maloai')->references('maloai')->on('loaisach');
            $table->string('nhaxuatban');
            $table->integer('namxuatban');
            $table->integer('soluong');
            $table->string('ngonngu');           
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
        //
    }
}
