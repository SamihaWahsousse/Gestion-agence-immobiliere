<?php

class Propriete{
    public $conn;
    public $adresse;
    public $nb_piece;
    public $surface;
    public $nb_garage;
    public $annee_const;

    public function __construct(PDO $conn, $adresse, $nb_piece, $surface, $nb_garage, $annee_const){
        
        $this->conn = $conn;
        $this->adresse = $adresse;
        $this->nb_piece = $nb_piece;
        $this->surface = $surface;
        $this->nb_garage = $nb_garage;
        $this->annee_const = $annee_const;
    }

    public function ajouteProp()
    {
        $stmt = $this->conn->prepare('INSERT INTO propriete (adresse, nb_piece, surface, nb_garage, annee_const, id_compte, id_ville, id_region, id_type_bien) VALUES (:adresse, :nb_piece, :surface, :nb_garage, :annee_const, NULL, 1, 1, 1)');

        try {
            $stmt->bindValue(':adresse', $this->adresse);
            $stmt->bindValue(":nb_piece", $this->nb_piece);
            $stmt->bindValue(':surface',$this->surface);
            $stmt->bindValue(':nb_garage', $this->nb_garage);
            $stmt->bindValue(':annee_const', $this->annee_const);

            $stmt->execute();
        } catch (PDOException $e) {
            echo $e;
        }
    }
}

?>