@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>MODIFICATION DE LA LISTE D'ATTENTE</h3>
  </div>
<div style="text-align: center;">
    <?php
        foreach ($reservation as $key => $value) {
            $positionFileAttente = $value->positionFileAttente;
            $idReservation = $value->idReservation;
            echo'Modification de la position dans la liste attente :  '.$value->nomUtilisateur.'<br><br><br><br><br><br><br><br>
            <form method="POST" action="updateFileAttente/'.$idReservation.'">';
        }?>
        {{ csrf_field() }}
        <p>Nouvelle place de file d'attente à attribué: <br><br></p>
        <select name="placeAattribuer">
        <?php
            foreach($placeAattribuer as $key => $value) {
               echo '<option value="'.$value->positionFileAttente.'">'.$value->positionFileAttente.'</option>';
            }
        ?>
        </select>
        <br><br><br>
        <button type="submit" value="valider">Valider</button>
        </form>
</div>
@endsection
