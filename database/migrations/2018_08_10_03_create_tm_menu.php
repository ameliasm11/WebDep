<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmMenu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_menu', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('module_id')->unsigned();
            $table->string('url');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('module_id')->references('id')->on('tm_module')
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
        Schema::dropIfExists('tm_menu');
    }
}
