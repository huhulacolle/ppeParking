@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9" ;>LISTE DES RESERVATIONS</h3>
</div>
<div class="container mb-3 mt-3">
    <table class="table">
        <thead>
        <th scope="col">utilisateur</th>
       <th scope="col">Numero de la place attribuée</th>
       <th scope="col">position dans la file d'attente</th>
       <th scope="col">Date début de la réservation</th>
       <th scope="col">Date fin de la réservation</th>
    </thead>
    <tbody>
        <?php
        $i = 0;
        $j = 0;
        ?>
        @foreach ($listeHistoReservation as $listeHistoReservationdata)
        <?php
        $i++;
         ?>
            @if ($listeHistoReservationdata -> dateFin > date("Y-m-d"))
            <?php
            $j++;
             ?>
                <tr>
                    <td>{{$listeHistoReservationdata->nomUtilisateur}}</td>
                    <td>{{$listeHistoReservationdata->numeroPlace}}</td>
                    <td>{{$listeHistoReservationdata->positionFileAttente}}</td>
                    <td>{{$listeHistoReservationdata->dateDebut}}</td>
                    <td>{{$listeHistoReservationdata->dateFin}}</td>
                    <td></td>
                </tr>
            @endif
        @endforeach
        <?php
        Log::debug($i);
        Log::debug($j);
        ?>
    </tbody>
</table>
</div>
@endsection
