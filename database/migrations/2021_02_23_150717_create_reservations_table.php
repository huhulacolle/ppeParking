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
            $table->integer('numeroPlace')->nullable();
            $table->integer('idUtilisateur')->nullable();
            $table->primary('idReservation');
            $table->timestamps();
        });

        Schema::table('reservations', function (Blueprint $table) {
            $table->foreign('numeroPlace')
                  ->references('numeroPlace')
                  ->on('parkings')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
            $table->foreign('idUtilisateur')
                  ->references('idUtilisateur')
                  ->on('utilisateurs')
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
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
