<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBacsy extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bacsy', function (Blueprint $table) {
            $table->bigIncrements('id_bacsy');
            $table->string('ten_bacsy');
            $table->bigInteger('id_chuyenkhoa')->unsigned()->nullable();
            $table->foreign('id_chuyenkhoa')->references('id')->on('chuyenkhoa');
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
        Schema::dropIfExists('bacsy');
    }
}
