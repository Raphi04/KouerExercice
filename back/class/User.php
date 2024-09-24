<?php
//Class de l'utilisateur permettant de récupérer ses informations
Class User {
    private $conn;
    public $id;

    public $firstname;
    public $lastname;

    public $mobile;
    public $birth;
    public $email;
    public $password;

    function __construct($db) {
        $this->conn = $db;
    }
    
    //Récupération des données de l'utilisateur en vérifiant d'abords l'email et le mot de passe lors de la connexion
    function getUser() {
        $sql = "SELECT * FROM users WHERE email=:email";
        $stmt = $this->conn->prepare($sql);
        $options = [
            "email" => $this->email
        ];
        if($stmt->execute($options)) {
            $results = $stmt->fetch(PDO::FETCH_ASSOC);
            if(isset($results["password"]) && $results["password"] == $this->password) {
                return $results;
            } else {
                return 404;
            }
        } else {
            return 404;
        }
    }

    function createUser() {
        $sql = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `mobile`, `birth`, `password`) VALUES (:firstname, :lastname, :email, :mobile, :birth, :password)";
        $stmt = $this->conn->prepare($sql);
        $options = [
            "firstname" => $this->firstname,
            "lastname" => $this->lastname,
            "email" => $this->email,
            "mobile" => $this->mobile,
            "birth" => $this->birth,
            "password" => $this->password
        ];
        if($stmt->execute($options)) {
            return "Utilisateur ajouté à la base de données.";
        } else {
            return 500;
        }
    }

}




