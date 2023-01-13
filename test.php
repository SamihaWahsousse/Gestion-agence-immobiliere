<?php
include_once('includes/header.php');
require_once('bdd/config.php');
require_once('lib/Query.php');
require_once('lib/Annonce.php');
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

if (isset($_POST['upload'])) {
    $file = $_FILES['file'];
    if ($file['size'] > 0 && $file['size'] <= 5000000) {
        if (exif_imagetype($file['tmp_name']) == IMAGETYPE_JPEG) {
            $file_name = $file['name'];
            $file_tmp = $file['tmp_name'];
            $file_destination = 'uploads/' . $file_name;
            move_uploaded_file($file_tmp, $file_destination);
            $sql = "INSERT INTO photo_prop (photo, id_annonce) VALUES (:file_path, :id_annonce)";
            $stmt = $conn->prepare($sql);
            $stmt->bindValue(':file_path', $file_destination);
            $stmt->bindValue(':id_annonce', 26);
            $stmt->execute();
            header('Location: test.php');
            exit;
        } else {
            echo "Invalid file type";
        }
    } else {
        echo "Invalid file size";
    }
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

<form method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload" name="upload">
</form>