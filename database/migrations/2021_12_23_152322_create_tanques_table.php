<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTanquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tanques', function (Blueprint $table) {
            $table->id();
            $table->time('Hora');
            $table->integer('Golpes');
            $table->integer('NIVPKT03');
            $table->integer('ControlConsistencia');
            $table->integer('NivelCuba');
            $table->integer('TanqueAgua');
            $table->float('VacioTrans');
            $table->float('Presion');
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
        Schema::dropIfExists('tanques');
    }
}
