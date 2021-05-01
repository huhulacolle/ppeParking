<?php

namespace App\Http\Controllers;

use App\Models\parking;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Controller;
use App\Mail\ChangeMDP;
use Illuminate\Http\Request;
use App\Models\reservation;
use App\Models\utilisateur;
use DateTime;
use Illuminate\Support\Facades\Hash;

class admin extends Controller
{
    public function showModifMdp($idUtilisateur)
    {
        $id = $_GET['id'];
        return view('admin.modificationMdpUtilisateur', compact('idUtilisateur', 'id'));
    }
    public function updateMotDePasse()
    {
        $idUtilisateur = $_POST['idUtilisateur'];
        $id = $_POST['id'];
        $mdp = $_POST['motDePasse'];
        $liste = 1;
        utilisateur::where("idUtilisateur","=", $idUtilisateur)->update(array('motDePasseUtilisateur' => Hash::make($mdp)));

        $req = utilisateur::select('mail')->where('idUtilisateur', '=', $idUtilisateur)->get();
        $mail = explode('"', $req);
        $mail = $mail[3];
        Mail::to($mail)->send(new ChangeMDP($mdp));
        return view('admin.acceuiladmin', compact('id', 'liste'));
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

    public function ajoutreservation()
    {
        $id = $_POST['IdUser'];
        $date = new DateTime();
        $placesLibres = parking::leftJoin('reservations', 'reservations.numeroPlace','=','parkings.idParking')->
                          select('parkings.idParking')->where('dateFin','<', $date->format('Y-m-d'))
                                                        ->orWhere('etatReservation','=', 1)->distinct()->get();
        $nbPlacesLibres = count($placesLibres);
        $max = reservation::select('idReservation')->max('idReservation') + 1;
        $attente = reservation::select('positionFIleAttente')->max('positionFileAttente') + 1;
        if ($nbPlacesLibres >= 0) {
            $nbPlacesLibres--;
            $input = rand(0, $nbPlacesLibres);
            $nbplace = $placesLibres[$input];
            $nbplace = explode(':', $nbplace);
            $nbplace = explode('}', $nbplace[1]);
            $nbplace = $nbplace[0];
            $datedebut = date('Y-m-d');
            $datefin = date('Y-m-t', strtotime('+1 month'));
            $requete = reservation::insert([
                'positionFileAttente' => null,
                'numeroPlace' => $nbplace,
                'utilisateur' => $id,
                'etatReservation' => 0,
                'dateDebut' => $datedebut,
                'dateFin' => $datefin,
            ]);
        }
        else {
            $requete = reservation::insert([
                'positionFileAttente' => $attente,
                'numeroPlace' => null,
                'utilisateur' => $id,
                'etatReservation' => 0,
                'dateDebut' => NULL,
                'dateFin' => NULL,
            ]);
        }
        $max = reservation::select('idReservation')->max('idReservation');
        return "c'est bon";
    }

    public function listereservation()
    {
        $listeHistoReservation = reservation::join('utilisateurs','reservations.utilisateur','=','idUtilisateur')->select('idReservation','positionFileAttente','numeroPlace','etatReservation','dateDebut','dateFin','nomUtilisateur')->orderBy('idReservation', 'desc')->get();
        $listeUtilisateur = utilisateur::join('reservations','idUtilisateur','=','utilisateur')->select('idUtilisateur', 'nomUtilisateur')->where('dateFin','<', date('Y-m-d'))->orwhere('etatReservation', '=', '1')->distinct()->get();
        return view('admin.listereservation', compact('listeHistoReservation', 'listeUtilisateur'));
    }

    public function demandesinscriptions()
    {
        $id = $_GET['id'];
        $utilisateurNonInscrits = utilisateur::select('idUtilisateur','nomUtilisateur','nom','prenom','mail','motDePasseUtilisateur')->where('estInscrit', '=', false)->get();
        return view('admin.demandesinscriptions', compact('utilisateurNonInscrits'));
    }

    public function accepterinscription($idUtilisateur)
    {
        utilisateur::where('idUtilisateur','=',$idUtilisateur)->update(array('estInscrit' => true));
        return back();
    }

    public function accepterToutesLesInscriptions()
    {
        utilisateur::where('estInscrit','=',false)->update(array('estInscrit' => true));
        return back();
    }

    public function refuserinscription($idUtilisateur)
    {
        utilisateur::where('idUtilisateur','=',$idUtilisateur)->delete();
        return back();
    }

    public function refuserToutesLesInscriptions()
    {
        utilisateur::where('estInscrit','=',false)->delete();
        return back();
    }

    public function histoattributionplace()
    {
        $listeHistoReservation = reservation::join('utilisateurs','reservations.utilisateur','=','idUtilisateur')->leftjoin('parkings', 'reservations.numeroPlace', '=', 'idParking')->select('idReservation','positionFileAttente','parkings.numeroPlace AS numeroPlace','etatReservation','dateDebut','dateFin','idUtilisateur','nomUtilisateur')->orderBy('idReservation', 'desc')->get();
        return view('admin.histoattributionplace', compact('listeHistoReservation'));
    }

    public function updateFileAttente(Request $request,$idReservation)
    {
        $id = $_POST['id'];
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
        return view('admin.acceuiladmin', compact('id'));
        // return redirect()->action([admin::class, 'listeattente']);
    }

    public function show($idReservation)
    {
        $id = $_GET['id'];
        $reservation = reservation::join('utilisateurs','idUtilisateur','=','utilisateur')->select('idReservation','nomUtilisateur')->where('idReservation','=', $idReservation)->get();
        $placeAattribuer = reservation::select('positionFileAttente')->where('idReservation','<>', $idReservation)->where('positionFileAttente','>',0)->orderBy('positionFileAttente')->get();
        return view('admin.modifListeAttente', compact('reservation','placeAattribuer'));
    }
}
