<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\utilisateur;

class UtilisateurTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        utilisateur::create(
            ['idUtilisateur' => 1, 'nomUtilisateur' => 'HugoAraujooooo', 'motDePasseUtilisateur' => 'huhuLaColle', 'isAdministrateur' => true ],
            ['idUtilisateur' => 2, 'nomUtilisateur' => 'RomainTh', 'motDePasseUtilisateur' => 'AyaRomain', 'isAdministrateur' => false ],
            ['idUtilisateur' => 3, 'nomUtilisateur' => 'BoaJulien', 'motDePasseUtilisateur' => 'julien1234', 'isAdministrateur' => false ],
            ['idUtilisateur' => 10, 'nomUtilisateur' => 'inconnu', 'motDePasseUtilisateur' => 'mdpInconnu', 'isAdministrateur' => false ]
        );
    }
}
