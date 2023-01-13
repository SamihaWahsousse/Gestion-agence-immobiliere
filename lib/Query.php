<?php
class Query {

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
    
    public function findAll($conn, $table, $value, $text){
        //$this->conn();
        $sql = "SELECT $value, $text FROM $table";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $data = $stmt->fetchAll();
        //$this->dieConnect();
        echo "<select class='form-select' name='$table' id=''>";
        foreach($data as $row) {
            echo "<option value='" . $row[$value] . "'>" . $row[$text] . "</option>";
        }
        echo "</select>";
    }
}
?>