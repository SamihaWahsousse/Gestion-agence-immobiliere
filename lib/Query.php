<?php
class Query
{

    /*private function conn() {
        // Store the connection details in variables
        $host = "localhost";
        $dbname = "bien_immobilier";
        $username = "root";
        $password = "";

        // Use the sprintf() function to construct the DSN string
        $dsn = sprintf('mysql:host=%s;dbname=%s; port=3306', $host, $dbname);

        // Connect to the database
        try {
            $conn = new PDO($dsn, $username, $password);
            // Set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    private function dieConnect(){
        $conn = null;
    }*/

    //declarer une variable private pour chaque table "ville-region-type_immo"
    //qui va stocker un tableau des id de chaque "option" du dropdown list

    private $tableVille = [];
    public function getTableVille()
    {
        return $this->tableVille;
    }

    private $tableRegion = [];
    public function getTableRegion()
    {
        return $this->tableRegion;
    }

    private $tableTypePropriete = [];
    public function getTableTypePropriete()
    {
        return $this->tableTypePropriete;
    }


    public function findAll($conn, $table, $value, $text)
    {
        //$this->conn();
        $sql = "SELECT $value, $text FROM $table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        //$this->dieConnect();
        echo "<select class='form-select' name='$table' id=''>";
        foreach ($data as $row) {
            echo "<option value='" . $row[$value] . "'>" . $row[$text] . "</option>";

            //Remplir les tableaux contenant les id de "region" "ville" "type_propriete" de récupérer depuis la BDD
            if ($table == 'ville') {
                array_push($this->tableVille, $row[$value]);
            } elseif ($table == 'type_propriete') {
                array_push($this->tableTypePropriete, $row[$value]);
            } else {

                array_push($this->tableRegion, $row[$value]);
            }
        }
        echo "</select>";
    }
}