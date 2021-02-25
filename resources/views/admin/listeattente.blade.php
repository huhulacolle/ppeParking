@extends('head.admin')
@section('content')
<div style="text-align: center;">
    <table border="1">
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
