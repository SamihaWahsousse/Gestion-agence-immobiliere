<?php

class operationPhoto{

    public $conn;
    
    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function ajoutePhoto($files, $id){
        for ($i = 0; $i < count($files['name']); $i++) {
            try {
                $file_name = $files['name'][$i];
                $query = "SELECT * FROM photo_prop WHERE photo = :file_name";
                $stmt = $this->conn->prepare($query);
                $stmt->bindValue(':file_name', $file_name);
                $stmt->execute();
                if ($stmt->rowCount() > 0){
                  throw new Exception("File already exists");
                }
                if ($files['size'][$i] > 0 && $files['size'][$i] <= 10000000) {
                    if (exif_imagetype($files['tmp_name'][$i]) == IMAGETYPE_JPEG) {
                        $file_tmp = $files['tmp_name'][$i];
                        $file_destination = 'uploads\\' . $file_name;
                        move_uploaded_file($file_tmp, $file_destination);
                        $sql = "INSERT INTO photo_prop (photo, id_annonce) VALUES (:file_path, :id_annonce)";
                        $stmt = $this->conn->prepare($sql);
                        $stmt->bindValue(':file_path', $file_destination);
                        $stmt->bindValue(':id_annonce', $id);
                        $stmt->execute();
                    } else {
                        throw new Exception("Invalid file type");
                    }
                } else {
                    throw new Exception("Invalid file size");
                }
            } catch (Exception $e) {
                echo "Error: " . $e->getMessage();
            }
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