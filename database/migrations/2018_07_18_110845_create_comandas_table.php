<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComandasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comandas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->integer('mesa_id')->unsigned()->index();
            $table->foreign('mesa_id')->references('id')->on('mesas')->onDelete('cascade');

            $table->integer('garcom_id')->unsigned()->index();
            $table->foreign('garcom_id')->references('id')->on('garcoms')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comandas');
    }
}
