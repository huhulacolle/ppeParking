<?php
$reserv = $dbreserv[1];
$today = date("Y-m-d");
Log::debug($today);
?>
@extends('head.user')
@section('content')
<center> <h2> Vos Réservation </h2> </center>
<br>
@if ($dbreserv[0] == 0)
    <table class="table">
        <thead>
            <th scope="col">Réservation N°</th>
            <th scope="col">File d'attente</th>
            <th scope="col">Date limite</th>
            <th scope="col">Validité</th>
        </thead>
        <tbody>
            @foreach ($reserv as $reservdata)
                <tr>
                    <td>
                        {{$reservdata -> idReservation}}
                    </td>
                    <td>
                        {{$reservdata -> positionFileAttente}}
                    </td>
                    <td>
                        {{$reservdata -> dateFin}}
                    </td>
                    <td>
                        @if ($reservdata -> dateFin < $today)
                            Valide
                        @else
                            Expirer
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <center> Aucune réservation effectuer </center>
@endif
@endsection
