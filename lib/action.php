<?php
echo "test";
exit;
require_once('utilities.php');
require_once('../bdd/config.php');
require_once('Query.php');
require_once('operationPhoto.php');


//Recuperation des données depuis le formulaire
echo "test";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $titleAnnonce   = $_POST['Titre'];
    $descriptif     = $_POST['descriptif'];
    $adresse        = $_POST['adresse'];
    $surface        = $_POST['surface'];
    $piece          = $_POST['piece'];
    $garage         = $_POST['garage'];
    $prix           = $_POST['prix'];
    $action_prop    = $_POST['action_prop'];
    $garage         = $_POST['garage'];
    $photo          = $_FILES['files'];
    $ville          = $_POST['ville'];
    $region         = $_POST['region'];
    $type_prop      = $_POST['type_propriete'];

    $tabAction = array("vente", "location");
    $tabGarage = array("0", "1");
    echo "test";
    if (
        verifyInput($titleAnnonce) && verifyInput($descriptif) && verifyInput($adresse) && verifyInput($surface)
        && verifyInput($piece) && verifyInput($titlePrix) && verifyInputOption($action_prop, $tabAction) && verifyInputOption($garage, $tabGarage)
    ) {
        $image = new operationPhoto($conn);
        $newAnnonce = new Annonce($conn, $titleAnnonce, $descriptif, $prix, $type_prop, $adresse, $piece, $surace, $garage, $region, $ville, $type_prop);
        $newAnnonce->ajouteAnnonce();
        $image->ajoutePhoto($photo, getIdAnnonce());
        echo " crée";
    }
}
    //vérifier si tous les champs sont remplis dropdowns select ville 