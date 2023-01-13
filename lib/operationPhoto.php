<?php

class operationPhoto{

    public $conn;
    
    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function ajoutePhoto($photo){
        if ($photo['size'] > 0 && $photo['size'] <= 5000000) {
            if (exif_imagetype($photo['tmp_name']) == IMAGETYPE_JPEG) {
                $file_name = $photo['name'];
                $file_tmp = $photo['tmp_name'];
                $file_destination = 'uploads\\' . $file_name;
                move_uploaded_file($file_tmp, $file_destination);
                $sql = "INSERT INTO photo_prop (photo, id_annonce) VALUES (:file_path, :id_annonce)";
                $stmt = $this->conn->prepare($sql);
                $stmt->bindValue(':file_path', $file_destination);
                $stmt->bindValue(':id_annonce', 26);
                $stmt->execute();
                header('Location: test.php');
                exit;
            } else {
                echo "type de fichier invalide";
            }
        } else {
            echo "Taille de fichier invalide";
        }
    }

    public function supprimePhoto($id){
        $file_path = $this->getFilePath($id);
        $sql = "DELETE FROM photo_prop WHERE id =:id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        unlink($file_path);
        header('Location: test.php');
        exit;
    }

    public function getFilePath($id) {
        $sql = "SELECT photo FROM photo_prop WHERE id = :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->bindValue(':id', $id);
        $stmt->execute();
        return $stmt->fetchColumn();
    }
}

?>