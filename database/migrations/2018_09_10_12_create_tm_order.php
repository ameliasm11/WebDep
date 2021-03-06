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
      Schema::create('tm_order', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('jadwal_id')->unsigned();
          $table->integer('user_id')->unsigned();
          $table->string('nama');
          $table->string('tanggal');
          $table->string('jam_pesan');
          $table->string('no_hp');
          $table->boolean('status')->nullable()->default('false');
          $table->rememberToken();
          $table->timestamps();

           $table->foreign('jadwal_id')->references('id')->on('tm_jadwal')
                ->onDelete('cascade')
                ->onUpdate('cascade');

          $table->foreign('user_id')->references('id')->on('tm_user')
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
