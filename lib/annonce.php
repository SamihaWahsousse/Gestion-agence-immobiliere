<?php
class Annonce
{

    public $conn;
    public $titre;
    public $description;
    public $prix;
    public $type_annonce;
    public $adresse;
    public $nb_piece;
    public $surface;
    public $has_garage;
    public $region;
    public $ville;
    public $type_propriete;

    public function __construct(PDO $conn, $titre, $description, $prix, $type_annonce, $adresse, $nb_piece, $surface, $has_garage, $region, $ville, $type_propriete)
    {
        $this->conn = $conn;
        $this->titre = $titre;
        $this->description = $description;
        $this->prix = $prix;
        $this->type_annonce = $type_annonce;
        $this->adresse = $adresse;
        $this->nb_piece = $nb_piece;
        $this->surface = $surface;
        $this->has_garage = $has_garage;
        $this->region = $region;
        $this->ville = $ville;
        $this->type_propriete = $type_propriete;
        
    }


    public function ajouteAnnonce()
    {
        $stmt = $this->conn->prepare('INSERT INTO annonce (titre, description, prix, type_annonce, adresse, nb_piece, surface, has_garage, id_ville, id_region, id_type_propriete) VALUES (:titre, :description, :prix, :type_annonce, :adresse, :nb_piece, :surface, :has_garage, :id_ville, :id_region, :id_type_propriete)');

        try {
            $stmt->bindValue(':titre', $this->titre);
            $stmt->bindValue(":description", $this->description);
            $stmt->bindValue(':prix', $this->prix);
            $stmt->bindValue(':type_annonce',$this->type_annonce);
            $stmt->bindValue(':adresse',$this->adresse);
            $stmt->bindValue(':nb_piece',$this->nb_piece);
            $stmt->bindValue(':surface',$this->surface);
            $stmt->bindValue(':has_garage',$this->has_garage);
            $stmt->bindValue(':id_ville',$this->ville);
            $stmt->bindValue(':id_region',$this->region);
            $stmt->bindValue(':id_type_propriete',$this->type_propriete);

            
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