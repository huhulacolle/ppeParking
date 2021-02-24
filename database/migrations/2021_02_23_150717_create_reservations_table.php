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
        Schema::create('reservation', function (Blueprint $table) {
            $table->engine = 'InnoDb';
            $table->integer('idReservation');
            $table->integer("positionFileAttente")->nullable();
            $table->integer('numeroPlace')->unsigned()->index();
            $table->integer('utilisateur')->unsigned()->index();
            $table->primary('idReservation');
            $table->timestamps();
        });

        Schema::table('reservation', function (Blueprint $table) {
            $table->foreign('numeroPlace')
                  ->references('idParking')
                  ->on('parking');
            $table->foreign('utilisateur')
                  ->references('idUtilisateur')
                  ->on('utilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservation');
    }
}
