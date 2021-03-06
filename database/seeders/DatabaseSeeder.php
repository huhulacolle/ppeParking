<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\reservation;
use App\Models\utilisateur;
use App\Models\parking;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 2 ,
                'numeroPlace'=> '2A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 3 ,
                'numeroPlace'=> '3A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 4 ,
                'numeroPlace'=> '4A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 5 ,
                'numeroPlace'=> '5A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 6 ,
                'numeroPlace'=> '6A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 7 ,
                'numeroPlace'=> '7A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 8 ,
                'numeroPlace'=> '8A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 9 ,
                'numeroPlace'=> '9A',
                'nbPlaces' => 10,
            ),
            array(
                'idParking' => 10 ,
                'numeroPlace'=> '10A',
                'nbPlaces' => 10,
            ),
        ));
        utilisateur::insert(array(
            array(
                'idUtilisateur' => 1, 'nomUtilisateur' => 'HugoAraujooooo','nom' =>'Hugo', 'Prenom' => 'Araujo','mail'=>'laTourInfernale@hotmail.com', 'motDePasseUtilisateur' => Hash::make('huhuLaColle'), 'estInscrit' => true, 'isAdministrateur' => true ,
            ),
            array(
                'idUtilisateur' => 2, 'nomUtilisateur' => 'RomainTh','nom' =>'Thiriot', 'Prenom' => 'RomainTmtc','mail'=>'ayaRT@hotmail.com', 'motDePasseUtilisateur' => Hash::make('AyaRomain'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 3, 'nomUtilisateur' => 'BoaJulien','nom' =>'Bois', 'Prenom' => 'Julien','mail'=>'julienInconnu@gmail.com', 'motDePasseUtilisateur' => Hash::make('julien1234'), 'estInscrit' => true, 'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 10, 'nomUtilisateur' => 'inconnu','nom' =>'zagzag', 'Prenom' => 'rh','mail'=>'royaumeDesRH@rhworld.com', 'motDePasseUtilisateur' => Hash::make('mdpInconnu') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 4, 'nomUtilisateur' => 'PasDeReservation','nom' =>'vinci', 'Prenom' => 'guerra','mail'=>'supraluminique@vinci.universe', 'motDePasseUtilisateur' => Hash::make('slatumGreut'),'estInscrit' => false,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 5, 'nomUtilisateur' => 'Escriva','nom' =>'Escriva', 'Prenom' => 'gOublié','mail'=>'escrivaSafari@safari.com', 'motDePasseUtilisateur' => Hash::make('JeKiffeLesParkings') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 6, 'nomUtilisateur' => 'bruney','nom' =>'faitesNousDesOrdisQuiMarchent', 'Prenom' => 'DIDIER','mail'=>'jeNeComprendspas@bloodyHell.com', 'motDePasseUtilisateur' => Hash::make('onTheFly'),'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 7, 'nomUtilisateur' => 'titli','nom' =>'fastFood', 'Prenom' => 'vintage','mail'=>'çaMarcheComment@huawei.com', 'motDePasseUtilisateur' => Hash::make('lesTrains') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 8, 'nomUtilisateur' => 'InèsMGG','nom' =>'Maganga', 'Prenom' => 'Inès','mail'=>'wtfmgg@iSpeakEngish.com', 'motDePasseUtilisateur' => Hash::make('holyShit') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 9, 'nomUtilisateur' => 'GianniBosioFromCunt','nom' =>'Bosio', 'Prenom' => 'Gianni','mail'=>'gianniBosio@kant.com', 'motDePasseUtilisateur' => Hash::make('narutoXmanonLove') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 11, 'nomUtilisateur' => 'MelvRedur','nom' =>'Redureau', 'Prenom' => 'Melvin','mail'=>'MelDokkan@battle.com', 'motDePasseUtilisateur' => Hash::make('CquantiqueToutça') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 12, 'nomUtilisateur' => 'Alex','nom' =>'CHERAMNAC', 'Prenom' => 'Alexei','mail'=>'jepechobeaucouptrop@tinder.com', 'motDePasseUtilisateur' => Hash::make('rocketLeague3000€') ,'estInscrit' => false,'isAdministrateur' => false ,
            ),
            array(
                'idUtilisateur' => 13, 'nomUtilisateur' => 'ProfDeMath','nom' =>'exponentiel', 'Prenom' => 'logarithmique','mail'=>'maths@calculatrice.com', 'motDePasseUtilisateur' => Hash::make('çacemangesansfaim') ,'estInscrit' => true,'isAdministrateur' => false ,
            ),
        ));
    }
}
