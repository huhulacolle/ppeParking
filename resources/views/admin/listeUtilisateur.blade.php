@extends('head.admin')
@section('content')


<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <form action="demandesinscriptions" method="post">
        @csrf

        <a class="btn btn-info" align="left" href="demandesinscriptions" role="button">Voir demandes d'inscription</a>


        <h3 align="center" style="color:#00DFF9" ;>LISTE DES UTILISATEURS</h3>
    </form>
</div>
    <table class="table">

        <th scope="col">Id de l'utilisateur </th>
        <th scope="col">Pseudo de l'utilisateur </th>
        <th scope="col">Nom de l'utilisateur </th>
        <th scope="col">Prénom de l'utlisateur </th>
        <th scope="col">Mail de l'utilisateur </th>
        <th scope="col">Mot de passe de l'utilisateur </th>
        <th scope="col">MDP Oublié? </th>
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
                            <td><a class="btn btn-primary" href="modificationMdpUtilisateur'.$idUtilisateur.'" role="button">Modifier</a></td>
                            <td></td>
                        </tr>';
                }
            ?>
        </tbody>
    </table>
<br><br><br><br><br>
<a href="testAdmin">Regarder les places libres</a>

@endsection
