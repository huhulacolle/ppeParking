@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>MODIFICATION DE LA LISTE D'ATTENTE</h3>
  </div>
<div style="text-align: center;">
    <?php
        foreach ($reservation as $key => $value) {
            echo'Modification de la liste pour la reservation'.$value->idReservation.'<br><br><br><br><br><br><br><br>
            <form method="POST" action="updateFileAttente/'.$value->positionFileAttente.'">';
        }?>
        <p>Nouvelle place de file d'attente à attribuer: <br><br></p>
        <select name="placeAttente">
        <?php
        foreach($placeAattribuer as $key => $value) {
            echo '<option value="'.$value->positionFileAttente.'">'.$value->positionFileAttente.'</option>';
        }
    ?>
        </select>
        <br><br><br>
        <button type="submit" value="valider">Valider</button>
</div>
@endsection
