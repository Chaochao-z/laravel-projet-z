<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Appartements extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('appartements', function (Blueprint $table) {
            $table->id();
            $table->string('type');
            $table->string('nb_piece');
            $table->string('localisation');
            $table->integer('prix');
            $table->integer('surface');
            $table->longText('description');
            $table->string('status');
            $table->datetime('date_publication')->default(DB::raw('CURRENT_TIMESTAMP'));
            $table->datetime('date_location')->default(DB::raw('CURRENT_TIMESTAMP'))->nullable();
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
