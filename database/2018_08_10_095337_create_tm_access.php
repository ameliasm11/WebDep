<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmAccess extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tm_access', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('role_id')->unsigned();
            $table->integer('module_id')->unsigned();
            $table->integer('menu_id')->unsigned();
            $table->string('do_insert');
            $table->string('do_update');
            $table->string('do_delete');
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('id')->on('tm_role')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('module_id')->references('id')->on('tm_module')
                  ->onDelete('cascade')
                  ->onUpdate('cascade');
            $table->foreign('menu_id')->references('id')->on('tm_menu')
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
        Schema::dropIfExists('tm_access');
    }
}
