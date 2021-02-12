@extends('head.connexion')
@section('content')
<div class="login-form">
    <form action="Inscription" method="post">
        <h2 class="text-center">Inscription du compte</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Utilisateur" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Mot de passe" required>
        </div>
        <div class="form-group">
            <input type="password" class="form-control" placeholder="Confirmation du mot de passe" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Inscription</button>
        </div>
    </form>
</div>
@endsection
