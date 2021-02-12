@extends('head.connexion')
@section('content')
<div class="login-form">
    <form action="PageUtilisateur" method="post">
        <h2 class="text-center">Connexion</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Utilisateur" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Mot de passe" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
        </div>
        <div class="clearfix">
            <a href="#" class="float-right">Mot de passe oublié ?</a>
        </div>
    </form>
</div>
@endsection
