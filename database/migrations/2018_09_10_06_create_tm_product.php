<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tm_product', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name');
          $table->integer('producat_id')->unsigned();
          $table->string('url');
          $table->boolean('status')->nullable()->default('false');
          $table->rememberToken();
          $table->timestamps();

          $table->foreign('producat_id')->references('id')->on('tm_category_product')
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
