<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\parking;
use Illuminate\Http\Request;
use App\Models\reservation;
use App\Models\utilisateur;
use DateTime;
use Illuminate\Support\Facades\Hash;

class admin extends Controller
{
    public function showModifMdp($idUtilisateur)
    {
        return view('admin.modificationMdpUtilisateur', compact('idUtilisateur'));
    }
    public function updateMotDePasse($idUtilisateur)
    {
        utilisateur::where("idUtilisateur","=", $idUtilisateur)->update(array('motDePasseUtilisateur' => Hash::make($_POST['motDePasse'])));
        $listeUtilisateur = utilisateur::select('idUtilisateur','nomUtilisateur','nom','prenom','mail','motDePasseUtilisateur','motDePasseOublie')->where('isAdministrateur', '=', false)->get();
        return view('admin.listeutilisateur', compact('listeUtilisateur'));
    }

    public function listeattente()
    {
        $utilisateursFileAttente = reservation::join('utilisateurs','idUtilisateur','=','utilisateur')->select('idReservation','nomUtilisateur', 'positionFileAttente')->where('positionFileAttente','>', 0)->get();
        return view('admin.listeattente', compact('utilisateursFileAttente'));
    }

    public function listeUtilisateur()
    {
        $listeUtilisateur = utilisateur::select('idUtilisateur','nomUtilisateur','nom','prenom','mail','motDePasseUtilisateur','motDePasseOublie')->where('isAdministrateur', '=', false)->get();
        return view('admin.listeutilisateur', compact('listeUtilisateur'));
    }
    public function demandesinscriptions()
    {
        $utilisateurNonInscrits = utilisateur::select('idUtilisateur','nomUtilisateur','nom','prenom','mail','motDePasseUtilisateur')->where('estInscrit', '=', false)->get();
        return view('admin.demandesinscriptions', compact('utilisateurNonInscrits'));
    }

    public function accepterinscription($idUtilisateur)
    {
        utilisateur::where('idUtilisateur','=',$idUtilisateur)->update(array('estInscrit' => true));
        $utilisateurNonInscrits = utilisateur::select('idUtilisateur','nomUtilisateur','nom','prenom','mail','motDePasseUtilisateur')->where('estInscrit', '=', false)->get();
        return view('admin.demandesinscriptions', compact('utilisateurNonInscrits'));
    }

    public function accepterToutesLesInscriptions()
    {
        utilisateur::where('estInscrit','=',false)->update(array('estInscrit' => true));
        $utilisateurNonInscrits = utilisateur::select('idUtilisateur','nomUtilisateur','nom','prenom','mail','motDePasseUtilisateur')->where('estInscrit', '=', false)->get();
        return view('admin.demandesinscriptions', compact('utilisateurNonInscrits'));
    }

    public function refuserinscription($idUtilisateur)
    {
        utilisateur::where('idUtilisateur','=',$idUtilisateur)->delete();
        $utilisateurNonInscrits = utilisateur::select('idUtilisateur','nomUtilisateur','nom','prenom','mail','motDePasseUtilisateur')->where('estInscrit', '=', false)->get();
        return view('admin.demandesinscriptions', compact('utilisateurNonInscrits'));
    }

    public function refuserToutesLesInscriptions()
    {
        utilisateur::where('estInscrit','=',false)->delete();
        $utilisateurNonInscrits = utilisateur::select('idUtilisateur','nomUtilisateur','nom','prenom','mail','motDePasseUtilisateur')->where('estInscrit', '=', false)->get();
        return view('admin.demandesinscriptions', compact('utilisateurNonInscrits'));
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
            if($value->positionFileAttente > $placeAattribuer)
                reservation::where('positionFileAttente','>=', $placeAattribuer)->increment('positionFileAttente');
            else
            reservation::where('positionFileAttente','<=', $placeAattribuer)->decrement('positionFileAttente');
        }
        reservation::where('idReservation','=',$idReservation)->update(array('positionFileAttente' => $placeAattribuer));
        $utilisateursFileAttente = reservation::select('idReservation','utilisateur', 'positionFileAttente')->where('positionFileAttente','>', 0)->get();
        return redirect()->action([admin::class, 'listeattente']);
    }

    public function show($idReservation)
    {
        $reservation = reservation::join('utilisateurs','idUtilisateur','=','utilisateur')->select('idReservation','nomUtilisateur')->where('idReservation','=', $idReservation)->get();
        $placeAattribuer = reservation::select('positionFileAttente')->where('idReservation','<>', $idReservation)->where('positionFileAttente','>',0)->orderBy('positionFileAttente')->get();
        return view('admin.modifListeAttente', compact('reservation','placeAattribuer'));
    }

    public function test()
    {
        $date = new DateTime();
        $placesLibres = parking::leftJoin('reservations', 'reservations.numeroPlace','=','parkings.numeroPlace')->
                          select('parkings.numeroPlace')->where('dateFin','<', $date->format('Y-m-d'))
                                                        ->orWhere('etatReservation','=', 1)->distinct()->get();
        return view('admin.testadmin', compact('placesLibres'));
    }
}
