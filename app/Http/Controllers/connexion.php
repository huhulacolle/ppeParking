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
            $inscrit = $connectdata -> estInscrit;
            $admin = $connectdata -> isAdministrateur;
        }
        if ($utilisateur != null && $motdepasse == $pswd) {
            if ($inscrit == 0) {
                $error = 2;
                return view('pageconnexion', compact('error'),);
            }
            else {
                if ($admin == 0) {
                    $action = 1;
                    return view('user.acceuiluser', compact('id'), compact('action'));
                }
                else {
                    return view('admin.acceuiladmin', compact('utilisateur'));
                }
            }
        }
        else {
            $error = 1;
            return view('pageconnexion', compact('error'));
        }
    }
    public function reinitialisemdp() 
    {
        $mdpreinitialise = utilisateur::delete('motDePasseUtilisateur')->where('mail', '=',$_POST['email'])->get();
        return view('user.mdpoublieresultat');
    }
}
