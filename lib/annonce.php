<?php

class Annonce
{
    protected $conn;

    public $titre;
    public $description;
    public $prix;
    public $date;
    public $status;
    public $type_transa;
    

    public function __construct(PDO $conn, $titre, $description, $prix, $date, $status, $type_transa)
    {
        $this->conn = $conn;
        $this->titre = $titre;
        $this->description = $description;
        $this->prix = $prix;
        $this->date = $date;
        $this->status = $status;
        $this->type_transa = $type_transa;
    }


    public function ajouteAnnonce()
    {
        $stmt = $this->conn->prepare('INSERT INTO annonce (titre, description, prix, date, status, type_transa, id_propriete) VALUES (:titre, :description, :prix, :date, :status, :type_transa, 1)');

        try {
            $stmt->bindValue(':titre', $this->titre);
            $stmt->bindValue(":description", $this->description);
            $stmt->bindValue(':prix', $this->prix);
            $stmt->bindValue(':date', $this->date);
            $stmt->bindValue(':status',$this->status);
            $stmt->bindValue(':type_transa',$this->type_transa);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e;
        }
    }

    public function supprimeAnnonce($id){
        try 
        {
            $stmt = $this->conn->prepare('DELETE FROM annonce WHERE id = :id_annonce');
            $stmt->bindValue(':id_annonce', $id);
            $stmt->execute();
        } catch (PDOException $e) {
            echo $e;
        }
    }
}
?>