@extends('head.admin')
@section('content')
<div style="text-align: center;">
    <table border="1">
        <thead>
            <tr>
                <th colspan="2" >Liste des utilisateurs</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Id de l'utilisateur</td>
                <td>nom de l'utilisateur</td>
            </tr>
            <?php
                foreach ($listeNom as $key => $value) {
                    echo '<tr>
                            <td>'.$value->idUtilisateur.'</td>
                            <td>'.$value->nomUtilisateur.'</td>
                        </tr>';
                }
            ?>
        </tbody>
    </table>
</div>
@endsection
