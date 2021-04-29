@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9" ;>LISTE DES RESERVATIONS</h3>
</div>
<div class="container mb-3 mt-3">
    <table class="table">
        <thead style="text-align: center">
            <th scope="col">utilisateur</th>
            <th scope="col">Numero de la place attribuée</th>
            <th scope="col">position dans la file d'attente</th>
            <th scope="col">Date début de la réservation</th>
            <th scope="col">Date fin de la réservation</th>
        </thead>
        <tbody>
            @foreach ($listeHistoReservation as $listeHistoReservationdata)
            @if ($listeHistoReservationdata -> dateFin > date("Y-m-d"))
            <tr style="text-align: center">
                <td>{{$listeHistoReservationdata->nomUtilisateur}}</td>
                <td>{{$listeHistoReservationdata->numeroPlace}}</td>
                <td>{{$listeHistoReservationdata->positionFileAttente}}</td>
                <td>{{$listeHistoReservationdata->dateDebut}}</td>
                <td>{{$listeHistoReservationdata->dateFin}}</td>
                <td> &ensp; </td>
            </tr>
            @endif
            @endforeach
            <tr style="text-align: center">
                <form action="AjoutReservation" method="post">
                    @csrf
                    <td style="text-align: center">
                        <select name="IdUser" class="form-control">
                            @foreach ($listeUtilisateur as $listeUtilisateurdata)
                            <option value={{$listeUtilisateurdata->idUtilisateur}}>
                                {{$listeUtilisateurdata->nomUtilisateur}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td> <input type="text" class="form-control" readonly> </td>
                    <td> <input type="text" class="form-control" readonly> </td>
                    <td> <input type="text" class="form-control" value={{date("Y-m-d")}} readonly> </td>
                    <td> <input type="text" class="form-control" value={{date('Y-m-t', strtotime('+1 month'))}}
                            readonly> </td>
                    <td>
                        <input type="submit" class="btn btn-primary" value="Ajouter">
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
</div>
@endsection
