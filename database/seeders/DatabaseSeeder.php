<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\reservation;
use App\Models\utilisateur;
use App\Models\parking;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        parking::insert(array(
            array(
                'idParking' => 1,
                'numeroPlace'=> '1A',
            ),
            array(
                'idParking' => 2 ,
                'numeroPlace'=> '2A',
            ),
            array(
                'idParking' => 3 ,
                'numeroPlace'=> '3A',
            ),
            array(
                'idParking' => 4 ,
                'numeroPlace'=> '4A',
            ),
        ));
        utilisateur::insert(array(
            array(
                'idUtilisateur' => 1, 'nomUtilisateur' =>'HugoA','nom' =>'Araujo', 'Prenom' => 'Hugo','mail'=>'araujohugo@msn.com', 'motDePasseUtilisateur' => Hash::make('hugoContreInjections'), 'estInscrit' => true, 'isAdministrateur' => true ,
            ),
            array(
                'idUtilisateur' => 2, 'nomUtilisateur' => 'GianniB','nom' =>'Bosio', 'Prenom' => 'Gianni','mail'=>'gianni.bosio@hotmail.com', 'motDePasseUtilisateur' => Hash::make('gianniBosioEn'), 'estInscrit' => false, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 3, 'nomUtilisateur' => 'RomainT','nom' =>'Thiriot', 'Prenom' => 'Romain','mail'=>'thiriot2002@gmail.com', 'motDePasseUtilisateur' => Hash::make('thiriotMdp'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 4, 'nomUtilisateur' => 'JulienB','nom' =>'Bois', 'Prenom' => 'Julien','mail'=>'julien.bois.techer@gmail.com', 'motDePasseUtilisateur' => Hash::make('julienBdd'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 5, 'nomUtilisateur' => 'AlexandreM','nom' =>'Mesle', 'Prenom' => 'Alexandre','mail'=>'moodle.alexandreMesle@gmail.com', 'motDePasseUtilisateur' => Hash::make('haveIBeenPawned'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 6, 'nomUtilisateur' => 'BenoitL','nom' =>'LaGrangier', 'Prenom' => 'Benoit','mail'=>'Benoit.lagrangier@gmail.com', 'motDePasseUtilisateur' => Hash::make('benoitLagrangier'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 7, 'nomUtilisateur' => 'LisaK','nom' => 'Lisa', 'Prenom' => 'klarons','mail'=>'lisaKlarons@gmail.com', 'motDePasseUtilisateur' => Hash::make('lisarvations'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 8, 'nomUtilisateur' => 'JacquesI','nom' =>'Illinois', 'Prenom' => 'Jacques','mail'=>'JacquesIllinois@gmail.com', 'motDePasseUtilisateur' => Hash::make('illinoisUsaJacques'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 9, 'nomUtilisateur' => 'BenjaminP','nom' =>'Pliort', 'Prenom' => 'Benjamin','mail'=>'pliortB@gmail.com', 'motDePasseUtilisateur' => Hash::make('pliortDoitur'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 10, 'nomUtilisateur' => 'AlexisM','nom' =>'Momuoir', 'Prenom' => 'Alexis','mail'=>'momuoir@gmail.com', 'motDePasseUtilisateur' => Hash::make('momentdansLeNoir'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 11, 'nomUtilisateur' => 'FabriceF','nom' =>'Flibustier', 'Prenom' => 'Fabrice','mail'=>'fabriceJournal@gmail.com', 'motDePasseUtilisateur' => Hash::make('flibusteurPereEnFils'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 12, 'nomUtilisateur' => 'KevinV','nom' =>'VonTron', 'Prenom' => 'Kevin','mail'=>'kevinvon@gmail.com', 'motDePasseUtilisateur' => Hash::make('vononmpd'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 13, 'nomUtilisateur' => 'AmidouD','nom' =>'Diallo', 'Prenom' => 'Amidou','mail'=>'amidouDiallo@gmail.com', 'motDePasseUtilisateur' => Hash::make('dialphone'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
        ));
        reservation::insert(array(
            array(
                'idReservation' => 1, 'positionFileAttente' => null , 'numeroPlace' => 4, 'utilisateur' => 4,'etatReservation' => 1, 'dateDebut' => '2020/08/10','dateFin' => '2020/09/10',
            ),
            array(
                'idReservation' => 2, 'positionFileAttente' => null , 'numeroPlace' => 3, 'utilisateur' => 9,'etatReservation' => 0, 'dateDebut' => date('Y-m-d', strtotime('-1 month')),'dateFin' => date('Y-m-d'),
            ),
            array(
                'idReservation' => 3, 'positionFileAttente' => null , 'numeroPlace' => 2, 'utilisateur' => 3,'etatReservation' => 0, 'dateDebut' => date('Y-m-d'), 'dateFin' => date('Y-m-d', strtotime('+1 month')),
            ),
            array(
                'idReservation' => 4, 'positionFileAttente' => null , 'numeroPlace' => 4, 'utilisateur' => 4,'etatReservation' => 0, 'dateDebut' => date('Y-m-d'), 'dateFin' => date('Y-m-d', strtotime('+1 month')),
            ),
            array(
                'idReservation' => 5, 'positionFileAttente' => null , 'numeroPlace' => 1, 'utilisateur' => 5,'etatReservation' => 0, 'dateDebut' => date('Y-m-d'), 'dateFin' => date('Y-m-d', strtotime('+1 month')),
            ),
        ));
    }
}
