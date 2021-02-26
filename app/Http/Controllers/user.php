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

        $dbreserv[1] = reservation::select('*')->where('utilisateur','=',$info[0])->get();

        return view('user.reservation', compact('info'), compact('dbreserv'));
    }
}
