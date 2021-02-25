@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>LISTE D'ATTENTE</h3>
  </div>
<div style="text-align: center;">
    <table border="2" align="center">
        <thead>
            <tr>
                <th colspan="2" >Liste d'attente</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Id de l'utilisateur</td>
                <td>position dans la file d'attente</td>
            </tr>
            <?php
                foreach ($utilisateursFileAttente as $key => $value) {
                    echo '<tr>
                            <td>'.$value->utilisateur.'</td>
                            <td>'.$value->positionFileAttente.'</td>
                        </tr>';
                }
            ?>
        </tbody>
    </table>
</div>
@endsection
