<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Else_;

class connexion extends Controller
{
    public function connexion()
    {
        $utilisateur = null;
        $motdepasse = null;
        $admin = null;
        $error = 0;
        $user = $_POST['user'];
        $pswd = $_POST['pswd'];
        $connect = DB::select('select * from utilisateur where nomUtilisateur = "'.$user.'"');
        foreach ($connect as $connectdata) {
            $utilisateur = $connectdata -> nomUtilisateur;
            $motdepasse = $connectdata -> motDePasseUtilisateur;
            $admin = $connectdata -> isAdministrateur;
        }
        if ($utilisateur != null && $motdepasse == $pswd) {
            if ($admin == 0) {
                return view('user.acceuiluser', compact('utilisateur'));
            }
            else {
                return view('admin.acceuiladmin', compact('utilisateur'));
            }
        }
        else {
            $error = 1;
        }
        return view('pageconnexion', compact('error'));
    }

    public function user_reservation()
    {
        $utilisateur = $_POST['utilisateur'];
        return view('user.reservation', compact('utilisateur'));
    }

    public function admin_listeattente()
    {
        $utilisateur = $_POST['utilisateur'];
        return view('admin.listeattente', compact('utilisateur'));
    }
}
