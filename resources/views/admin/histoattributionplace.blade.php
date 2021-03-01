@extends('head.admin')
@section('content')
<div style="text-align: center;">
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>HISTORIQUE DES RESERVATIONS</h3>
</div>
    <table border="1" align="center">
        <thead>
            <tr>
                <th colspan="7"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Id de la réservation</td>
                <td>position dans la file d'attente</td>
                <td>Numero de la place attribuée</td>
                <td>utilisateur</td>
                <td>Etat de la réservation</td>
                <td>Date début de la réservation</td>
                <td>Date fin de la réservation</td>
            </tr>
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
