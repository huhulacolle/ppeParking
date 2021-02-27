<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\reservation;
use App\Models\utilisateur;

class user extends Controller
{
    public function reservation()
    {
        $requete = utilisateur::select('*')->where('idUtilisateur', '=',$_POST['id'])->get();
        foreach ($requete as $requetedata) {
            $id = $requetedata -> idUtilisateur;
            $nom = $requetedata -> nom;
            $prenom = $requetedata -> prenom;
        }
        $info = array(
            0 => $id,
            1 => $nom,
            2 => $prenom,
        );

        $reservation = reservation::select('idReservation')->where('utilisateur', '=', $info[0])->count();

        $dbreserv = array(
            0 => 0,
            1 => null,
        );

        if ($reservation == 0) {
            $dbreserv[0] = 1;
        }

        $dbreserv[1] = reservation::select('*')->where('utilisateur','=',$info)->get();

        return view('user.reservation', compact('info'), compact('dbreserv'));
    }

    public function annule()
    {
        $annule = DB::table('reservations')
        ->where('idReservation', '=', $_POST['id'])
        ->update(['etatReservation' => 1]);
        $id = $_POST['iduser'];
        $action = $_POST['action'];
        return view('user.acceuiluser', compact('action'), compact('id'));
    }

    public function formMDP()
    {
        $requete = utilisateur::select('*')->where('idUtilisateur', '=',$_POST['id'])->get();
        foreach ($requete as $requetedata) {
            $id = $requetedata -> idUtilisateur;
            $nom = $requetedata -> nom;
            $prenom = $requetedata -> prenom;
        }
        $info = array(
            0 => $id,
            1 => $nom,
            2 => $prenom,
        );

        return view('user.modificationmdp', compact('info'));
    }

    public function confirmMDP()
    {

        $action = 2;
        $user = array(
            0 => $_POST['iduser'],
            1 => 0,
        );
        $connect = utilisateur::select('motDePasseUtilisateur')->where('idUtilisateur', '=', $user[0])->get();
        foreach ($connect as $connectdata) {
            $old = $connectdata -> motDePasseUtilisateur;
        }
        if ($old == $_POST['old']) {
            $update = DB::table('utilisateurs')
            ->where('idUtilisateur', '=', $user[0])
            ->update(['motDePasseUtilisateur' => $_POST['new']]);
            $user[1] = 2;
        }
        else {
            $user[1] = 1;
        }
        return view('user.acceuiluser', compact('action'), compact('user'));
    }

}
