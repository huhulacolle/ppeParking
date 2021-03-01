<?php
$reserv = $dbreserv[1];
$today = date("Y-m-d");
Log::debug($today);
?>
@extends('head.user')
@section('content')
<center>
    <h2> Vos Réservations </h2>
</center>
<br>
{{-- ajouter le champ numeroPlace --}}
{{-- faire disparaitre le bouton : faire une réservation (si une réservation de l'utilisateur est déjà en cours) --}}
@if ($dbreserv[0] == 0)
<div class="container mb-3 mt-3">
    <table class="table">
        <thead>
            <th scope="col">Réservation N°</th>
            <th scope="col">File d'attente</th>
            <th scope="col">Réservation faite le</th>
            <th scope="col">Date limite</th>
            <th scope="col">Etat de la reservation</th>
            <th scope="col"></th>
        </thead>
        <tbody>
            @foreach ($reserv as $reservdata)
            <?php $annule = 0 ?>
            <tr>
                <td>
                    {{$reservdata -> idReservation}}
                </td>
                <td>
                    {{$reservdata -> positionFileAttente}}
                </td>
                <td>
                    {{$reservdata -> dateDebut}}
                </td>
                <td>
                    {{$reservdata -> dateFin}}
                </td>
                <td>
                    <?php
                            Log::debug($reservdata -> idReservation);
                            Log::debug($reservdata -> etatReservation);

                            if ($reservdata -> dateDebut == NULL) {
                                echo 'En attente';
                                $annule = 1;
                            }
                            elseif ($reservdata -> etatReservation == 1) {
                                echo 'Annulée';
                                $annule = 1;
                            }
                            elseif ($reservdata -> dateFin < $today) {
                                echo 'Expirée';
                                $annule = 1;
                            }
                            else {
                                echo 'Validée';
                            }
                            ?>
                </td>
                <td>
                    <form action="annuler" method="post">
                        @csrf
                        <input type="hidden" name="iduser" value={{$info[0]}}>
                        <input type="hidden" name="action" value="1">
                        @if ($annule == 0)
                        <button type="submit" value={{$reservdata -> idReservation}}
                            onclick='return confirm("Êtes-vous sûr de vouloir annuler la reservation ?")' name="id"
                            class="btn btn-danger">Annuler</button>
                        @endif
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@else
<center> Aucune réservation effectuer </center>
@endif
@if ($annule != 0)
    <form action="ReservationExe" method="post">
        @csrf
        <input type="hidden" name="iduser" value={{$info[0]}}>
        <div class="container mb-3 mt-3">
            <p class="text-center">
                <button type="submit" class="btn btn-success">Faire une réservation</button>
            </p>
        </div>
    </form>
@endif
@endsection
