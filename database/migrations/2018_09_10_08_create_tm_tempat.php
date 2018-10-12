<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmTempat extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_tempat', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nama');
            $table->string('alamat');
            $table->string('gambar');
            $table->string('jam_buka');
            $table->string('jam_tutup');
            $table->integer('partner_id');
            $table->string('deskripsi');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('partner_id')->references('id')->on('tm_partner_company')
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
