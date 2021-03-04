@extends('head.admin')
@section('content')
<div class="shadow-lg p-3 mb-5 bg-white rounded">
    <h3 align="center" style="color:#00DFF9";>MODIFICATION DU MOT DE PASSE DE L'UTILISATEUR : </h3>
  </div>
<div style="text-align: center;">
    <form action="updateMotDePasse/{{$idUtilisateur}}" method="post">;
        @csrf
        <h2 class="text-center">Modification du mot de passe</h2>
        <div class="form-group">
            Nouveau mot de passe
            <input type="password" name="motDePasse" class="form-control" maxlength="30" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Changer le mot de passe</button>
        </div>
    </form>
</div>
@endsection
