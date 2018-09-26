<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmOrder extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tm_oder', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama');
          $table->integer('no_hp');
          $table->integer('tempat');
          $table->integer('lapangan');
          $table->integer('tanggal');
          $table->integer('jam');
          $table->integer('harga');
          $table->string('status');
          $table->rememberToken();
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
