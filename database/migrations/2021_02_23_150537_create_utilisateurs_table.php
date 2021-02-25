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
        Schema::create('utilisateur', function (Blueprint $table) {
            $table->engine = 'InnoDb';
            $table->increments('idUtilisateur');
            $table->char('nomUtilisateur', 50)->unique();
            $table->char('motDePasseUtilisateur', 30);
            $table->integer('motDePasseValide')->default(0); // 0 : attente de validation , 1 : refusé, 2 : validé
            $table->boolean('isAdministrateur');
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
        Schema::dropIfExists('utilisateur');
    }
}
