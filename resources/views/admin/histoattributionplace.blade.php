@extends('head.admin')
@section('content')
<div style="text-align: center;">
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>HISTORIQUE DES RESERVATIONS</h3>
</div>
<div class="container mb-3 mt-3">
        <table class="table">
            <thead>
           <th scope="col">Id de la réservation</th>
           <th scope="col">position dans la file d'attente</th>
           <th scope="col">Numero de la place attribuée</th>
           <th scope="col">utilisateur</th>
           <th scope="col">Etat de la réservation</th>
           <th scope="col">Date début de la réservation</th>
           <th scope="col">Date fin de la réservation</th>
        </thead>
        <tbody>
          
            <?php
                foreach ($listeHistoReservation as $key => $value) {
                    echo '<tr>
                            <td>'.$value->idReservation.'</td>
                            <td>'.$value->positionFileAttente.'</td>
                            <td>'.$value->numeroPlace.'</td>
                            <td>'.$value->nomUtilisateur.'</td>
                            <td>'.$value->etatReservation.'</td>
                            <td>'.$value->dateDebut.'</td>
                            <td>'.$value->dateFin.'</td>
                        </tr>';
                }
            ?>
        </tbody>
    </table>
</div>
@endsection
