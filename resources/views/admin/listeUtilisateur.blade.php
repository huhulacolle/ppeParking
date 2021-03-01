@extends('head.admin')
@section('content')

<form action="demandesinscriptions" align="center" method="post">
@csrf

        <button type="submit"  class="nav-link">Voir demandes d'inscription</button>

              </form>
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>LISTE DES UTILISATEURS</h3>
  </div>
    <table border="2" align="center">
        <thead>
            <tr>
                <th colspan="8" >Liste des utilisateurs</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Id de l'utilisateur   </td>
                <td>Pseudo de l'utilisateur   </td>
                <td>Nom de l'utilisateur   </td>
                <td>Prénom de l'utlisateur   </td>
                <td>Mail de l'utilisateur  </td>
                <td>Mot de passe de l'utilisateur   </td>
                <td>Mot de passe de l'utilisateur oublié   </td>
                <td>Modifier le mot de passe de l'utilisateur</td>
            </tr>
            <?php
                foreach ($listeUtilisateur as $key => $value) {
                    $idUtilisateur = $value->idUtilisateur;
                    echo '<tr>
                            <td>'.$idUtilisateur.'</td>
                            <td>'.$value->nomUtilisateur.'</td>
                            <td>'.$value->nom.'</td>
                            <td>'.$value->prenom.'</td>
                            <td>'.$value->mail.'</td>
                            <td>'.$value->motDePasseUtilisateur.'</td>
                            <td>'.$value->motDePasseOublie.'</td>
                            <td><a href="modificationMdpUtilisateur'.$idUtilisateur.'"> Modifier mot de passe utlisateur</a></td>
                            <td></td>
                        </tr>';
                }
            ?>
        </tbody>
    </table>
<a href="testAdmin">Regarder les places libres</a>
</div>
@endsection
