@extends('head.admin')
@section('content')

<div style="text-align: center;">
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>DEMANDES INSCRIPTIONS</h3>
    <br><br>
    <a href = "toutaccepter">Accepter toutes les inscriptions </a>
    <a href = "toutrefuser">Refuser toutes les inscriptions </a>
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
                <td>Accepter</td>
                <td>Refuser </td>
            </tr>
                @foreach ($utilisateurNonInscrits as $value)
                    <tr><td>{{$value->idUtilisateur}}</td>
                        <td>{{$value->nomUtilisateur}}</td>
                        <td>{{$value->nom}}</td>
                        <td>{{$value->prenom}}</td>
                        <td>{{$value->mail}}</td>
                        <td>{{$value->motDePasseUtilisateur}}</td>
                        <td><a href="accepterInscription/{{$value->idUtilisateur}}">Accepter inscription </a></td>
                        <td><a href="refuserInscription/{{$value->idUtilisateur}}">Refuser inscription </a></td></tr>
                @endforeach
</div>
@endsection
