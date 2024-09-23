<?php
//Class de l'utilisateur permettant de récupérer ses informations
Class User {
    private $conn;
    public $id;

    private $firstname;
    private $lastname;

    public $mobile;

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

}




