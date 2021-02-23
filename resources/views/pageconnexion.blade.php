@extends('head.connexion')
@section('content')
<div class="login-form">
    <form action="PageUtilisateur" method="post">
        <h2 class="text-center">Connexion</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Utilisateur" required>
        </div>
        <div class="form-group">
            <input type="password" id="mdp" class="form-control" placeholder="Mot de passe" required>
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
        <div class="clearfix">
            <a href="#" class="float-right">Mot de passe oublié ?</a>
        </div>
    </form>
</div>
@endsection
