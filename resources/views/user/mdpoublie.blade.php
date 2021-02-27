<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Connexion/Inscription</title>
    <script type="text/javascript">
        //empêche le clique droit
        //<!--
        document.oncontextmenu = new Function("return false");
        //-->

    </script>
</head>

<body>
    <style>
        .login-form {
            width: 340px;
            margin: 50px auto;
            font-size: 15px;
        }

        .login-form form {
            margin-bottom: 15px;
            background: #f7f7f7;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
            padding: 30px;
        }

        .login-form h2 {
            margin: 0 0 15px;
        }

        .form-control,
        .btn {
            min-height: 38px;
            border-radius: 2px;
        }

        .btn {
            font-size: 15px;
            font-weight: bold;
        }

    </style>
    
    <nav class="navbar navbar-light bg-light">
        <span class="navbar-brand mb-0 h1">Reservation Parking</span>
        <span class="navbar-text">

        <div class="login-form">
    <form action="mdpoublieresultat" method="get">
        <h2 class="text-center">Mot de passe oublié ?</h2>
        <div class="form-group">
            <input type="text" class="form-control" placeholder="email" required>
        </div>
        
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Réinitialisation</button>
        </div>
    </form>
</div>
