<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\reservation;

class user extends Controller
{
    public function reservation()
    {
        $requete = DB::select('select * from utilisateurs where idUtilisateur = "'.$_POST['id'].'"');
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

        $reservation = DB::select('SELECT count(idReservation) AS id FROM `reservations` where utilisateur = "'.$info[0].'"');

        $dbreserv = array(
            0 => 0,
            1 => null,
        );

        foreach ($reservation as $reservationdata) {
            $id = $reservationdata -> id;
        }
        if ($id == 0) {
            $dbreserv[0] = 1;
        }

        $dbreserv[1] = reservation::select('*')->where('utilisateur','=',$info[0])->get();

        return view('user.reservation', compact('info'), compact('dbreserv'));
    }
}
