@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>TEST REQUETE PLACE LIBRE</h3>
  </div>
<div style="text-align: center;">
    <table border="1">
    <?php
        foreach ($placesLibres as $key => $value) {
            echo'<tr><td>Place libre  :</td><td>'.$value->numeroPlace.'</td></tr>';
        }?>
    </table>
</div>
@endsection
