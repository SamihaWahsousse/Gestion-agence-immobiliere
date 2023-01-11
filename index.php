<?php
require_once('bdd/config.php');
require_once('lib/annonce.php');
$listeAnnonce = new Annonce($conn, "hello", "smlsqmlsqkmsqmlskmsq", 580.2, "2023-10-01", 1, 'achat');
$listeAnnonce->supprimeAnnonce(1);

$conn = null;
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- ici je gère la taille de l'écran -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <!-- ici je met le titre de l'onglet de page -->
    <title>Agence immobiliere SMImmo</title>

    <!-- ici je met le link bootstrapp -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <link href="asset/css/app.css" rel="stylesheet">

</head>

<body>
</body>

<!-- je met le script javascript bootstrapp -->
<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> -->

</html>