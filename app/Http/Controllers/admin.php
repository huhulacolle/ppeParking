<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\reservation;
use App\Models\utilisateur;
use Illuminate\Support\Facades\Redirect;

class admin extends Controller
{
    public function listeattente()
    {
        $utilisateur = $_POST['utilisateur'];
        $utilisateursFileAttente = reservation::select('idReservation','utilisateur', 'positionFileAttente')->where('positionFileAttente','>', 0)->get();
        return view('admin.listeattente', compact('utilisateursFileAttente','utilisateur'));
    }

    public function listeUtilisateur()
    {
        $utilisateur = $_POST['utilisateur'];
        $listeNom = utilisateur::select('idUtilisateur','nomUtilisateur')->where('isAdministrateur', '=', false)->get();
        return view('admin.listeutilisateur', compact('utilisateur','listeNom'));
    }

    public function histoattributionplace()
    {
        $utilisateur = $_POST['utilisateur'];
        $listeHistoReservation = reservation::join('utilisateurs','reservations.utilisateur','=','idUtilisateur')->select('idReservation','positionFileAttente','numeroPlace','etatReservation','dateDebut','dateFin','nomUtilisateur')->get();
        return view('admin.histoattributionplace', compact('utilisateur','listeHistoReservation'));
    }

    public function updateFileAttente(Request $request, $idReservation)
    {
        // foreach($reservation as $value)
        // {
        //     reservation::where('positionFileAttente','>', $value->positionFileAttente)->update(array('positionFileAttente' => 'positionFileAttente + 1'));
        // }
        // return Redirect::to('admin.listeattente');
    }

    public function show($idReservation)
    {
        $utilisateur = utilisateur::select('nomUtilisateur')->where('isAdministrateur','=',true)->get();
        foreach($utilisateur as $key => $value)
            $utilisateur = $value->nomUtilisateur;
        $reservation = reservation::select('*')->where('idReservation','=', $idReservation)->get();
        $placeAattribuer = reservation::select('positionFileAttente')->where('idReservation','<>', $idReservation)->get();
        return view('admin.modifListeAttente', compact('utilisateur','reservation','placeAattribuer'));
    }
}
