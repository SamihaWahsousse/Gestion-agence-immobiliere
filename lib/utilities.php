<?php

// Fonction pour vérifier si les champs du formulaire sont bien remplis ou non 
function verifyInput($inputElement)
{
    if (isset($inputElement) && !empty($inputElement)) {

        return true;
    }
    return false;
}


// Fonction pour vérifier la valeur sélectionnée d'un radio boutton ou d'un dropdown 
function verifyInputOption($selectedElement, $tabValidElement)
{
    if (isset($selectedElement) && !empty($selectedElement) && (in_array($selectedElement, $tabValidElement))) {
        return true;
    }
    return false;
}


// Fonction pour vérifer les données envoyées par l'user
function cleanInput($inputElement)
{
    $inputElement = trim($inputElement);
    $inputElement = stripslashes($inputElement);
    $inputElement = htmlspecialchars($inputElement);
    return $inputElement;
}

// Fonction pour vérifer les images envoyées par l'user

/*function verifyInputImage()
{

    $file = $_FILES['photo'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExtension = explode('.',  $fileName);
    $fileActualExtension = strtolower(end($fileName));
    $tabExtension = array('jpg', 'jpeg', 'png');
    if (in_array($fileActualExtension, $tabExtension)) {
        if($fileSize<500000)
    } else {
        echo " Merci de vérifier votre type de fichier ! fichier autorisés : IAMGES('jpg', 'jpeg', 'png')";
    }
}*/