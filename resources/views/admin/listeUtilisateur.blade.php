@extends('head.admin')
@section('content')

<form action="DemandesInscriptions" align="center" method="post">
                 
                  <input type="hidden" name="utilisateur" value={{$utilisateur}}>
                 
                      <button type="submit"  class="nav-link">Voir demandes d'inscription</button>
                 
              </form>
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>LISTE DES UTILISATEURS</h3>
  </div>
    <table border="2" align="center">
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
