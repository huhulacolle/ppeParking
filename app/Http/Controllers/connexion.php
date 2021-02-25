<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\utilisateur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Else_;

class connexion extends Controller
{
    public function connexion()
    {
        $utilisateur = null;
        $id = null;
        $motdepasse = null;
        $admin = null;
        $error = 0;
        $user = $_POST['user'];
        $pswd = $_POST['pswd'];
        $connect = utilisateur::select('*')->where('nomUtilisateur', '=', $user)->get();
        foreach ($connect as $connectdata) {
            $utilisateur = $connectdata -> nomUtilisateur;
            $id = $connectdata -> idUtilisateur;
            $motdepasse = $connectdata -> motDePasseUtilisateur;
            $admin = $connectdata -> isAdministrateur;
        }
        if ($utilisateur != null && $motdepasse == $pswd) {
            if ($admin == 0) {
                return view('user.acceuiluser', compact('id'));
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
}
