<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmHarga extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_harga', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('tempat_id');
            $table->integer('lapangan_id');
            $table->string('jam');
            $table->string('harga');
            $table->rememberToken();
            $table->timestamps();
            $table->foreign('tempat_id')->references('id')->on('tm_tempat')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('lapangan_id')->references('id')->on('tm_lapangan')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
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
