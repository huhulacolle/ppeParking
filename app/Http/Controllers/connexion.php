<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use App\Mail\Testmail;
use Illuminate\Support\Facades\Mail;
use App\Models\utilisateur;
use App\Models\parking;
use App\Models\reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use PhpParser\Node\Stmt\Else_;
use Illuminate\Support\Facades\Hash;

class connexion extends Controller
{

    public function test()
    {
        $enattente = count(reservation::select('*')->whereNull('dateFin')->get());
        $notein = reservation::select('parkings.numeroPlace AS numeroPlace')->join('utilisateurs', 'reservations.utilisateur', '=', 'idUtilisateur')->join('parkings', 'parkings.idParking', '=', 'reservations.numeroPlace')->where('dateFin', '>', date('Y-m-d'))->where('etatReservation', '=', 0)->get()->toArray();
        $placesLibres = parking::select('idParking')->whereNotIn('idParking', $notein)->get();
        $nbPlacesLibres = count($placesLibres);
        if ($enattente > 0) {
            if ($nbPlacesLibres > 0) {
                for ($i=1; $i <= $enattente; $i++) {
                    if ($i == 1) {
                        foreach ($placesLibres as $placesLibresdata) {
                            $numeroPlace = $placesLibresdata -> idParking;
                        }
                        // echo 'le mec à la place ', $i, ' à une place pour le parking ', $numeroPlace, ' ';
                        reservation::where('positionFileAttente', '=', $i)->update([
                            'positionFileAttente' => null,
                            'numeroPlace' => $numeroPlace,
                            'etatReservation' => 0,
                            'dateDebut' => date('Y-m-d'),
                            'dateFin' => date('Y-m-d', strtotime('+1 month')),
                        ]);
                    }
                    else {
                        $fileattente = $i - 1;
                        // echo ' le mec qui était en ', $i, ' est maintenant en', $fileattente, ' ';
                        reservation::where('positionFileAttente', '=', $i)->update([
                            'positionFileAttente' => $fileattente,
                        ]);
                    }
                }
            }
        }
    }

    public function verification()
    {
        $enattente = count(reservation::select('*')->whereNull('dateFin')->get());
        $notein = reservation::select('parkings.numeroPlace AS numeroPlace')->join('utilisateurs', 'reservations.utilisateur', '=', 'idUtilisateur')->join('parkings', 'parkings.idParking', '=', 'reservations.numeroPlace')->where('dateFin', '>', date('Y-m-d'))->where('etatReservation', '=', 0)->get()->toArray();
        $placesLibres = parking::select('idParking')->whereNotIn('idParking', $notein)->get();
        $nbPlacesLibres = count($placesLibres);
        if ($enattente > 0) {
            if ($nbPlacesLibres > 0) {
                for ($i=1; $i <= $enattente; $i++) {
                    if ($i == 1) {
                        foreach ($placesLibres as $placesLibresdata) {
                            $numeroPlace = $placesLibresdata -> idParking;
                        }
                        // echo 'le mec à la place ', $i, ' à une place pour le parking ', $numeroPlace, ' ';
                        reservation::where('positionFileAttente', '=', $i)->update([
                            'positionFileAttente' => null,
                            'numeroPlace' => $numeroPlace,
                            'etatReservation' => 0,
                            'dateDebut' => date('Y-m-d'),
                            'dateFin' => date('Y-m-d', strtotime('+1 month')),
                        ]);
                    }
                    else {
                        $fileattente = $i - 1;
                        // echo ' le mec qui était en ', $i, ' est maintenant en', $fileattente, ' ';
                        reservation::where('positionFileAttente', '=', $i)->update([
                            'positionFileAttente' => $fileattente,
                        ]);
                    }
                }
            }
        }
        return view('pageconnexion');
    }

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
        if ($utilisateur != null && Hash::check($pswd, $motdepasse)) {
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
                    $action = 1;
                    return view('admin.acceuiladmin', compact('id', 'action'));
                }
            }
        }
        else {
            $error = 1;
            return view('pageconnexion', compact('error'));
        }
    }

    public function inscriptionexe()
    {
        $verif = utilisateur::select('*')->get();
        $error = 0;
        foreach ($verif as $verifdata) {
            // si le nom d'utilisateur n'est pas dans la bdd, le message d'erreur correspondant s'affiche
            if ($verifdata -> nomUtilisateur == $_GET['user']) {
                $error = 1;
            }
            // si le nom d'utilisateur n'est pas dans la bdd, le message d'erreur correspondant s'affiche
            if ($verifdata -> mail == $_GET['mail']) {
                $error = 2;
            }
        }
        // si les deux mot de passes rentrée ne sont pas les mêmes
        if ($_GET['password'] != $_GET['newpassword']) {
            $error = 3;
        }
        // si aucune erreur, alors l'inscription se lance
        if ($error == 0) {
            $error = 4;
            $inscription = DB::table('utilisateurs')->insert([
                'nomUtilisateur' => $_GET['user'],
                'nom' => $_GET['nom'],
                'prenom' => $_GET['prenom'],
                'mail' => $_GET['mail'],
                'motDePasseUtilisateur' => Hash::make($_GET['password']),
                'isAdministrateur' => false,
            ]);
            return view('pageconnexion', compact('error'));
        }
        // return back();
        return view('pageinscription', compact('error'));
    }

    public function reinitialisemdp()
    {
        $error = 2;
        $verif = utilisateur::select('mail')->where('isAdministrateur','=',false)->get();
        foreach ($verif as $verifdata) {
            if ($verifdata->mail == $_GET['email']) {
                $error = 3;
            }
        }
        if ($error == 3) {
            $error = 5;
            utilisateur::where('mail', '=',$_GET['email'])->update(array('motDePasseOublie' => true));
            return view('pageconnexion', compact('error'));
        }
        else {
            return view('mdpoublie', compact('error'));
        }

    }

}
