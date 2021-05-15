@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9" ;>LISTE DES PLACES</h3>
</div>
<div class="container mb-3 mt-3">
    <table class="table">
        <thead style="text-align: center">
            <th scope="col">Numero de la place</th>
            <th scope="col">&ensp;</th>
        </thead>
        <tbody>
            @foreach ($listeplace as $listeplacedata)
                <tr style="text-align: center">
                    <td>{{$listeplacedata->numeroPlace}}</td>
                    @if ($alert[$listeplacedata->numeroPlace] == false)
                        <td>
                            <form action="DeletePlace" method="post">
                                @csrf
                                <input type="hidden" name="id" value={{$_POST['id']}}>
                                <button type="submit" name="idParking" class="btn btn-danger btn-block" value={{$listeplacedata->idParking}}> Supprimer </button>
                            </form>
                        </td>
                    @else
                        <td>
                            <button type="submit" name="idParking" class="btn btn-danger btn-block" onclick="alert('Impossible de supprimer cette place')" value={{$listeplacedata->idParking}}> Supprimer </button>
                        </td>
                    @endif
                </tr>
            @endforeach
            <tr width='10%'>
                <form action="AjoutPlace" method="post">
                    @csrf
                    <input type="hidden" name="id" value={{$_POST['id']}}>
                    <td>
                        <?php
                        $numeroPlace = str_split($listeplacedata->numeroPlace);
                        if ($numeroPlace[1] == "0") {
                            $lettre = $numeroPlace[2];
                            $nombre = 1;
                            $lettre++;
                        }
                        else {
                            $lettre = $numeroPlace[1];
                            $nombre = $numeroPlace[0];
                            $nombre++;
                        }
                        $numeroPlace = $nombre.$lettre;
                        ?>
                        <input type="text" name="numeroPlace" style="text-align: center" class="form-control" value={{$numeroPlace}} readonly>
                    </td>
                    <td>
                        <input type="submit" class="btn btn-primary btn-block" value="Ajouter">
                    </td>
                </form>
            </tr>
        </tbody>
    </table>
</div>
@endsection
{{-- @if ($listeplacedata->numeroPlace == $placeprisedata->numeroPlace)
<td>
    <button type="submit" name="idParking" class="btn btn-danger btn-block" onclick="alert('Impossible de supprimer cette place')" value={{$listeplacedata->idParking}}> Supprimer </button>
    @break
</td>
@else
<form action="DeletePlace" method="post">
    @csrf
    <input type="hidden" name="id" value={{$_POST['id']}}>
    <td>
        <button type="submit" name="idParking" class="btn btn-danger btn-block" value={{$listeplacedata->idParking}}> Supprimer </button>
    </td>
</form>
@break
@endif --}}
