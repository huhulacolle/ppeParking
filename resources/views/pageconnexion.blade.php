<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Connexion</title>
</head>

<body>

    <br><br><br>
    <center>
        <h1> <strong> page de connexion </strong> </h1>
    </center>
    <br> <br>
    <form action="PageUtilisateur" method="post">
        <div class="mx-auto" style="width: 300px;">
            <table class="table table-borderless">
                <tr>
                    <td>
                        Utilisateur : <input type='text' class="form-control" name='user' required>
                    </td>
                </tr>
                <tr>
                    <td>Mot de passe : <input type="password" class="form-control" name="password" required>
                </tr>
            </table>
        </div>
        <div class="mx-auto" style="width: 500px;">
            <table class="table table-borderless">
                <thead>
                    <tr class='ligneTabNonQuad'>
                        <td width='85%'></td>
                        <td><button type="submit" value="Valider" class="btn btn-primary mb-2">Valider</button></td>
                    </tr>
            </table>
        </div>
    </form>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>
