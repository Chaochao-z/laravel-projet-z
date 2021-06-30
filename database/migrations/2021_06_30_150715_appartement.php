<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Appartement extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartement', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('nb_piece');
            $table->string('localisation');
            $table->integer('prix');
            $table->string('Role');
            $table->integer('surface');
            $table->longText('description');
            $table->string('status');
            $table->date('date_publication');
            $table->date('date_location')->nullable();
            $table->unsignedBigInteger('id_user')->nullable();
            $table->foreign('id_user')->references('id')->on('users');
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
