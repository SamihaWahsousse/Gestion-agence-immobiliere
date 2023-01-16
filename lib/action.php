<?php
var_dump($_POST);
echo '<br/>';
var_dump($_FILES);

var_dump(verifyInputOption($_POST['action_prop']), $tabAction = array("vente", "location"));

//Recuperation des données depuis le formulaire
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {

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

    /* if (
        verifyInput($titleAnnonce) && verifyInput($descriptif) && verifyInput($adresse) && verifyInput($surface)
        && verifyInput($piece) && verifyInput($titlePrix) && verifyInputOption($action_prop,$tabGarage)
    ) {
    }
}
    //vérifier si tous les champs sont remplis dropdowns select ville 

    function verifyInputOption($selectedElement, $tabValidElement)*/
}