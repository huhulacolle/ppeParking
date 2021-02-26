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
        $utilisateursFileAttente = reservation::select('idReservation','utilisateur', 'positionFileAttente')->where('positionFileAttente','>', 0)->get();
        return view('admin.listeattente', compact('utilisateursFileAttente'));
    }

    public function listeUtilisateur()
    {
        $listeNom = utilisateur::select('idUtilisateur','nomUtilisateur')->where('isAdministrateur', '=', false)->get();
        return view('admin.listeutilisateur', compact('listeNom'));
    }

    public function histoattributionplace()
    {
        $listeHistoReservation = reservation::join('utilisateurs','reservations.utilisateur','=','idUtilisateur')->select('idReservation','positionFileAttente','numeroPlace','etatReservation','dateDebut','dateFin','nomUtilisateur')->get();
        return view('admin.histoattributionplace', compact('listeHistoReservation'));
    }

    public function updateFileAttente(Request $request,$idReservation)
    {
        $placeAattribuer= $request->input('placeAattribuer');
        $request = reservation::select('positionFileAttente')->where('idReservation','=', $idReservation)->get();
        foreach($request as $key => $value)
        {
            if($value->positionFileAttente >$placeAattribuer)
                reservation::where('positionFileAttente','>=', $placeAattribuer)->increment('positionFileAttente');
            else
            reservation::where('positionFileAttente','<=', $placeAattribuer)->decrement('positionFileAttente');
        }
        reservation::where('idReservation','=',$idReservation)->update(array('positionFileAttente' => $placeAattribuer));
        $utilisateursFileAttente = reservation::select('idReservation','utilisateur', 'positionFileAttente')->where('positionFileAttente','>', 0)->get();
        return redirect('ListeAttente');;
    }

    public function show($idReservation)
    {
        $reservation = reservation::select('*')->where('idReservation','=', $idReservation)->get();
        $placeAattribuer = reservation::select('positionFileAttente')->where('idReservation','<>', $idReservation)->where('positionFileAttente','>',0)->orderBy('positionFileAttente')->get();
        return view('admin.modifListeAttente', compact('reservation','placeAattribuer'));
    }
}
