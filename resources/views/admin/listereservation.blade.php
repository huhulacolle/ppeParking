@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9" ;>LISTE DES RESERVATIONS</h3>
</div>
<div class="container mb-3 mt-3">
    @if ($reservNULL == 1)
    <div class="alert alert-danger" style="text-align: center" role="alert">
        Aucune reservation n'est active
      </div>
    @else
        <table class="table">
            <thead style="text-align: center">
                <th scope="col">utilisateur</th>
                <th scope="col">Numero de la place attribuée</th>
                <th scope="col">Date début de la réservation</th>
                <th scope="col">Date fin de la réservation</th>
                <th scope="col">&ensp;</th>
            </thead>
            <tbody>
                @foreach ($listeHistoReservation as $listeHistoReservationdata)
                    <tr style="text-align: center">
                        <td>{{$listeHistoReservationdata->nomUtilisateur}}</td>
                        <td>{{$listeHistoReservationdata->numeroPlace}}</td>
                        <td>{{$listeHistoReservationdata->dateDebut}}</td>
                        <td>{{$listeHistoReservationdata->dateFin}}</td>
                        <form action="AnnuleReservation" method="post">
                            @csrf
                            <input type="hidden" name="id" value={{$_POST['id']}}>
                            <td>
                                <button type="submit" name="idReserv" class="btn btn-danger" onclick='return confirm("Êtes-vous sûr de vouloir annuler la reservation ?")' value={{$listeHistoReservationdata->idReservation}}>Annuler</button>
                            </td>
                        </form>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
</div>
@endsection
