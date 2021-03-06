@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>MODIFICATION DE LA LISTE D'ATTENTE</h3>
  </div>
<div style="text-align: center;">
        @foreach ($reservation as $reservationdata)
            {{$positionFileAttente = $reservationdata->positionFileAttente}}
            {{$idReservation = $reservationdata->idReservation}}
            Modification de la position dans la liste attente :  {{$reservationdata->nomUtilisateur}}<br><br><br><br><br><br><br><br>
            <form method="POST" action="updateFileAttente/{{$idReservation}}">;
        @endforeach
        {{ csrf_field() }}
        <p>Nouvelle place de file d'attente à attribué: <br><br></p>
        <select name="placeAattribuer">
            @foreach($placeAattribuer as $value)
               <option value="{{$value->positionFileAttente}}">{{$value->positionFileAttente}}</option>
            @endforeach
        </select>
        <br><br><br>
        <input type="hidden" name="id" value={{$_GET['id']}}>
        <button type="submit" value="valider">Valider</button>
        </form>
</div>
@endsection
