<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        return view('user.reservation', compact('info'));
    }
}
