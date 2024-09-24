<?php
$getUser = 1;
$errorEmail = false;
$errorPassword = false;

//Test pour vérifier si c'est la première fois que l'on vient sur la page
if(array_key_exists("email", $_POST)) {
    if(empty($_POST["email"])) {
        $errorEmail = true;
    } elseif(empty($_POST["password"])) {
        $errorPassword = true;
    } else {
        //Si les deux inputs sont remplis on vérifie qu'ils existent
        include_once "../back/config/Database.php";
        include_once "../back/class/User.php";

        $database = new Database();
        $db =$database->getConnexion();

        $user = new User($db);
        $user->email = $_POST["email"];
        $user->password = $_POST["password"];
        $getUser = $user->getUser();

        //Si il existe alors on lance la session et on enregistre les informations utiles
        if($getUser !== 404) {
            session_start();
            $_SESSION["logged"] = true;
            $_SESSION["firstname"] = $getUser["firstname"];
            $_SESSION["lastname"] = $getUser["lastname"];

            //On redirige à la page d'accueil
            header("location:index.php");
        }
    }
}
?>

<!DOCTYPE html>
<html lang="fr" class="w-full h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kouer - Connexion ou inscription</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom.css">
</head>
<body class="w-full h-full">
    <section class="connexionPage w-full h-full flex justify-center items-center">
        <section class="formContainer flex flex-col items-center w-fit p-20 bg-white rounded-lg">
            <a href="index.php">
                <img src="images/kouerLogo.svg" class="w-40">
            </a>
            <h2 class="text-green-500 font-semibold">Content de vous voir !</h2>
            <form action="" method="post" class="flex flex-col mt-5">
                <div class="flex flex-col">
                    <label for="email" class="text-gray-400 pl-4">Adresse Email</label>
                    
                    <?php
                        if($errorEmail || $getUser == 404) {
                            echo "<input type='email' id='email' name='email' class='bg-gray-200 rounded-full p-2 border-red-500 border-2'>";
                        } else {
                            if(array_key_exists("email", $_POST)) {
                                echo "<input type='email' id='email' name='email' class='bg-gray-200 rounded-full p-2' value='" . $_POST['email'] . "'>";
                            } else {
                                echo "<input type='email' id='email' name='email' class='bg-gray-200 rounded-full p-2'>";
                            }
                        }
                    ?>

                </div>

                <div class="flex flex-col mt-5">
                    <label for="password" class="text-gray-400 pl-4">Mot de passe</label>

                    <?php
                      if($errorPassword || $getUser == 404) {
                        echo "<input type='password' id='password' name='password' class='bg-gray-200 rounded-full p-2 border-red-500 border-2'>";
                    } else {
                        echo "<input type='password' id='password' name='password' class='bg-gray-200 rounded-full p-2'>";
                    }
                    ?>
                </div>
                
                <?php
                if($getUser == 404) {
                    echo "<p class='text-red-500 text-center'>Identifiant ou mot de passe incorrect. Veuillez réessayer.</p>";
                }
                ?>

                <a href="" class="text-gray-400 font-semibold forgot underline mt-3">Mot de passe oublié</a>

                <button type="submit" class="mt-5 bg-green-500 text-white rounded-full py-2 connexion-button font-semibold">Se connecter</button>

                <a href="inscription" class="flex justify-center mt-5 border-green-500 border-2 text-green-500 rounded-full py-2 font-semibold">Créer un compte</a>
            </form>
        </section>
    </section>
</body>
</html>