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
        <th scope="col">MDP Oublié? </th>
        </tr>
        @foreach ($listeUtilisateur as $listeUtilisateurdata)
            <?php $idUtilisateur = $listeUtilisateurdata->idUtilisateur; ?>
            <tr>
                <td>{{$idUtilisateur}}</td>
                <td>{{$listeUtilisateurdata->nomUtilisateur}}</td>
                <td>{{$listeUtilisateurdata->nom}}</td>
                <td>{{$listeUtilisateurdata->prenom}}</td>
                <td>{{$listeUtilisateurdata->mail}}</td>
                <td>
                    @if ($listeUtilisateurdata->motDePasseOublie == 0)
                        <a class="btn btn-primary" href="modificationMdpUtilisateur/{{$idUtilisateur}}" role="button">Modifier</a>
                    @else
                        <a class="btn btn-danger" href="modificationMdpUtilisateur/{{$idUtilisateur}}" role="button">Modifier</a>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
<br><br><br><br><br>
<a href="testAdmin">Regarder les places libres</a>

@endsection
