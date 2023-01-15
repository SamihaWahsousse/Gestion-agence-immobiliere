<?php
include_once('includes/header.php');
require_once('bdd/config.php');
require_once('lib/Query.php');
require_once('lib/Annonce.php');
require_once('lib/operationPhoto.php');

$test = new Query();
/*if($_SERVER['REQUEST_METHOD']=='POST'){
    $ville = $_POST['ville'];
    $region = $_POST['region'];
    $type_propriete = $_POST['type_propriete'];
    $addListing = new Annonce($conn, 'Smile', ':)', 520, 'vente', 'adresse', 3, 70, 0, $ville, $region, $type_propriete);
    $addListing->supprimeAnnonce(25);
    header('Location: test.php');
    exit;
}*/

$test2 = new operationPhoto($conn);

if (isset($_POST['upload'])) {
    $photos = $_FILES['files'];
    $test2->ajoutePhoto($photos, 26);
    header('location: test.php');
    exit;
}


if (isset($_POST['delete'])) {
    $test2->supprimePhoto(26);
    header('location: test.php');
    exit;
}



 

/*

*/
?>

<form method="post">
    <?php $test->findAll($conn,'ville', 'id', 'nom'); ?>
    <?php $test->findAll($conn,'region', 'id', 'nom'); ?>
    <?php $test->findAll($conn,'type_propriete', 'id', 'type'); ?>
    <button type="submit">Envoyer</button>
</form>
<br>
<form method="post" enctype="multipart/form-data">
    <input type="file" name="files[]" multiple>
    <input type="submit" value="Upload" name="upload">
    <input type="submit" value="Delete" name="delete">
</form>