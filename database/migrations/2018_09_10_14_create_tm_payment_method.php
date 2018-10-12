<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmPaymentMethod extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tm_payment_method', function (Blueprint $table) {
          $table->increments('id');
          $table->integer('type_id');
          $table->string('nama');
          $table->rememberToken();
          $table->timestamps();

          $table->foreign('type_id')->references('id')->on('tm_payment_type')
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
