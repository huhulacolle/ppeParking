@extends('head.connexion')
@section('content')
<div class="login-form">
    <?php
    if (isset($error) && $error == 1) {
        echo 'erreur nom ou mot de passe';
    }
    ?>
    <form action="/" method="post">
        @csrf
        <h2 class="text-center">Connexion</h2>
        <div class="form-group">
            <input type="text" name="user" class="form-control" placeholder="Utilisateur" required>
        </div>
        <div class="form-group">
            <input type="password" name="pswd" id="mdp" class="form-control" placeholder="Mot de passe" required>
            <input type="checkbox" onclick="myFunction()">Montrer mot de passe

            <script>
function myFunction() {
  var x = document.getElementById("mdp");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
</script>

        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Connexion</button>
        </div>
    </form>
    <div class="clearfix">
        <a href="#" class="float-right">Mot de passe oublié ?</a>
    </div>
</div>
@endsection
