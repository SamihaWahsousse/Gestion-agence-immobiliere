<?php
class User
{
    protected $conn;

    public function __construct(PDO $conn)
    {
        $this->conn = $conn;
    }

    public function register($prenom, $nom, $telephone, $email, $password)
    {
        // store user information into database
        $stmt = $this->conn->prepare('INSERT INTO compte (prenom, nom, email, password, role) VALUES (:prenom, :nom, :email, :password, :role)');
        try {
            $stmt->bindValue(':prenom', $prenom);
            $stmt->bindValue(":nom", $nom);
            $stmt->bindValue(':email', $email);
            $stmt->bindValue(':password', password_hash($password, PASSWORD_DEFAULT));
            $stmt->bindValue(':role', 'client');
            $stmt->execute();
            header("location: confirmation.php");
            exit;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
            header("location: register.php");
        }
    }

    public function login($email, $password)
    {
        // Sanitize the input
        $sanitized_email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if (filter_var($sanitized_email, FILTER_VALIDATE_EMAIL)) {
            echo "This sanitized email address is considered valid. \n";
        }

        $password = htmlspecialchars($password, ENT_QUOTES);
        
        // Construct the query
        $query = "SELECT * FROM compte WHERE email= ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email, PDO::PARAM_STR);

        // Execute the query
        $stmt->execute();

        // Fetch the result
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Check if a row was returned
        if ($row) {
            if (password_verify($password, $row['password'])) {
                // Start a new session
                session_start();
    
                // Store the user's information in the session
                $_SESSION['user_id'] = $row['id'];
    
                // Redirect the user to the page
                header("Location: index.php");
                exit;

            } else {
                // password is invalid
                header("location: login.php");
                exit;
            }
    
        } else {
            header("location: login.php");
            exit;
        }
    }
}