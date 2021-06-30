<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Ventes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventes', function (Blueprint $table){
            $table->id();
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_appartement');
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_appartement')->references('id')->on('appartement');
            $table->date('date_vente');
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
