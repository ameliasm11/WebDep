<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmLapangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_lapangan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('ket_lapangan');
            $table->integer('tempat_id')->unsigned();
            $table->rememberToken();
            $table->timestamps();

             $table->foreign('tempat_id')->references('id')->on('tm_tempat')
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
