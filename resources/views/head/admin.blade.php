<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <title>Parking</title>
    <script type="text/javascript">
        //empêche le clique droit
        //<!--
        document.oncontextmenu = new Function("return false");
        //-->

    </script>
</head>

<body>
    <?php
    $adresse = $_SERVER['PHP_SELF'];
    $adresse = explode("/", $adresse);
    $adresse = $adresse[2];
    Log::debug($adresse);
    ?>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand">Administrateur</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            @if ($adresse == "ListeAttente")
                <li class="nav-item active">
                    <a class="nav-link" href="ListeAttente">Liste d'attente</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="ListeAttente">Liste d'attente</a>
                </li>
            @endif
            @if ($adresse == "ListeUtilisateur")
                <li class="nav-item active">
                    <a class="nav-link" href="ListeUtilisateur">Liste des utilisateurs</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="ListeUtilisateur">Liste des utilisateurs</a>
                </li>
            @endif
            @if ($adresse == "HistoAttributionPlace")
                <li class="nav-item active">
                    <a class="nav-link" href="HistoAttributionPlace">Historique attribution des places</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link" href="HistoAttributionPlace">Historique attribution des places</a>
                </li>
            @endif
          </ul>
        </div>
      </nav>

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
</body>

</html>
