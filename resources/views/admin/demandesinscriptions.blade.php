@extends('head.admin')
@section('content')

<h2>Demandes d'inscriptions</h2>
<br><br><br><br><br>
<div style="text-align: center;">
    <table border="2" align="center">
        <thead>
            <tr>
                <th colspan="8" >Liste d'attente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Id de l'utilisateur</td>
                <td>Pseudonyme de l'utilisateur</td>
                <td>Nom</td>
                <td>Prénom</td>
                <td>Mail</td>
                <td>Mot de passe de l'utilisateur</td>
                <td>Accepter l'inscription</td>
                <td>Refuser l'inscription</td>
            </tr>
            <?php
                foreach ($utilisateurNonInscrits as $key => $value) {
                    $idUtilisateur = $value->idUtilisateur;
                    echo'<tr><td>'.$idUtilisateur.'</td>
                         <td>'.$value->nomUtilisateur.'</td>
                         <td>'.$value->nom.'</td>
                         <td>'.$value->prenom.'</td>
                         <td>'.$value->mail.'</td>
                         <td>'.$value->motDePasseUtilisateur.'</td>
                         <td><a href="/accepterInscription/'.$idUtilisateur.'">Accepter inscription </a></td>
                         <td><a href="/refuserInscription/'.$idUtilisateur.'">Refuser inscription </a></td></tr>';
                }
            ?>
</div>
