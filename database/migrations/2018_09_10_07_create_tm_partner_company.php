<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTmPartnerCompany extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('tm_partner_company', function (Blueprint $table) {
          $table->increments('id');
          $table->string('nama');
          $table->integer('category_id');
          $table->integer('produk_id');
          $table->rememberToken();
          $table->timestamps();

          $table->foreign('category_id')->references('id')->on('tm_category_product')
               ->onDelete('cascade')
               ->onUpdate('cascade');
          $table->foreign('produk_id')->references('id')->on('tm_product')
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
