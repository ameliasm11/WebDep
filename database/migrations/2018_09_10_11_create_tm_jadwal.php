<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmJadwal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tm_jadwal', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('lapangan_id')->unsigned();
          $table->string('tanggal');
          $table->string('jam');
          $table->integer('harga_id')->unsigned();
          $table->boolean('status')->nullable()->default('false');
          $table->rememberToken();
          $table->timestamps();

          $table->foreign('lapangan_id')->references('id')->on('tm_lapangan')
                ->onDelete('cascade')
                ->onUpdate('cascade');
          $table->foreign('harga_id')->references('id')->on('tm_harga')
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
