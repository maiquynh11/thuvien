<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChuyenkhoa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chuyenkhoa', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('ten_chuyenkhoa');
            $table->bigInteger('id_BenhVien')->unsigned()->nullable();
            $table->foreign('id_BenhVien')->references('id')->on('benhviens');
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
        Schema::dropIfExists('chuyenkhoa');
    }
}
