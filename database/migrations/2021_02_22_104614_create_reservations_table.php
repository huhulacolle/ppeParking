<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->engine = 'InnoDb';
            $table->integer('idReservation');
            $table->integer("positionFileAttente");
            $table->foreign('numeroPlace')->references('numeroPlace')->on('parkings');
            $table->foreign('idUtilisateur')->references('idUtilisateur')->on('utilisateurs');
            $table->primary('idReservation');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
