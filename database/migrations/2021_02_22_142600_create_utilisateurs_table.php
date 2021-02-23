<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUtilisateursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('utilisateurs', function (Blueprint $table) {
            $table->engine = 'InnoDb';
            $table->integer('idUtilisateur');
            $table->date('DateInscrit');
            $table->char('nomUtilisateur', 50);
            $table->char('motDePasseUtilisateur', 30);
            $table->boolean('isAdministrateur');
            $table->primary('idUtilisateur');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('utilisateurs');
    }
}
