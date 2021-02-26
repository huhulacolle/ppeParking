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
            $table->integer("positionFileAttente")->nullable();
            $table->string('numeroPlace');
            $table->integer('utilisateur')->unsigned()->index();
            $table->string("etatReservation")->nullable();
            $table->date('dateDebut')->nullable();
            $table->date('dateFin')->nullable();
            $table->primary('idReservation');
            $table->timestamps();
        });

        /**
         * Schema::table('reservations', function (Blueprint $table) {
         *   $table->foreign('numeroPlace')
         *         ->references('idParking')
         *         ->on('parking');
         *   $table->foreign('utilisateur')
         *         ->references('idUtilisateur')
         *         ->on('utilisateur');
         *   });
        */
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
