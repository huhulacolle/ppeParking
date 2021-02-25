<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\reservation;
use App\Models\utilisateur;

class admin extends Controller
{
    public function listeattente()
    {
        $utilisateur = $_POST['utilisateur'];
        $utilisateursFileAttente = reservation::select('utilisateur', 'positionFileAttente')->where('positionFileAttente','>', 0)->get();
        return view('admin.listeattente', compact('utilisateursFileAttente','utilisateur'));
    }

    public function listeUtilisateur()
    {
        $utilisateur = $_POST['utilisateur'];
        $listeNom = utilisateur::select('idUtilisateur','nomUtilisateur')->where('isAdministrateur', '=', false)->get();
        return view('admin.listeUtilisateur', compact('utilisateur','listeNom'));
    }
}
