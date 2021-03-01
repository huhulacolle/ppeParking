@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>LISTE D'ATTENTE</h3>
  </div>
<div style="text-align: center;">
    <table border="2" align="center">
        <thead>
            <tr>
                <th colspan="3" >Liste d'attente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pseudonyme de l'utilisateur</td>
                <td>position dans la file d'attente</td>
                <td>modifier la position dans la file d'attente</td>
            </tr>
            <?php
                foreach ($utilisateursFileAttente as $key => $value) {
                    echo '<tr>
                            <td>'.$value->nomUtilisateur.'</td>
                            <td>'.$value->positionFileAttente.'</td>
                            <td><a href="modificationFileAttente/'.$value->idReservation.'"> modifier la file attente</a></td>
                        </tr>';
                }
            ?>
        </tbody>
    </table>
</div>
@endsection
