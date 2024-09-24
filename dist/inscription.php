<?php
$createUser = 1;
$errorFirstname = false;
$errorLastname = false;
$errorEmail = false;
$errorMobile = false;
$errorBirth = false;

$errorPassword = false;
$errorConfirmPassword = false;
$passwordNotEqual = false;

//Test pour vérifier si c'est la première fois que l'on vient sur la page
if(array_key_exists("email", $_POST)) {
    if(empty($_POST["firstname"])) {
        $errorFirstname = true;
    } elseif(empty($_POST["lastname"])) {
        $errorLastname = true;
    } elseif(empty($_POST["email"])) {
        $errorEmail = true;
    } elseif(empty($_POST["mobile"])) {
        $errorMobile = true;
    } elseif(empty($_POST["birth"])) {
        $errorBirth = true;
    } elseif(empty($_POST["password"])) {
        $errorPassword = true;
    } elseif(empty($_POST["confirmPassword"])) {
        $errorConfirmPassword = true;
    } elseif($_POST["password"] !== $_POST["confirmPassword"]) {
        $passwordNotEqual = true;
        $errorPassword = true;
        $errorConfirmPassword = true;
    } else {
        //Réorganisation de la date de naissance

        $explodedBirth = explode("/", $_POST["birth"]);
        $reorganisedDate = $explodedBirth[2]."-".$explodedBirth[1]."-".$explodedBirth[0];

        //Si tous est bon, on ajoute l'utilisateur
        include_once "../back/config/Database.php";
        include_once "../back/class/User.php";

        $database = new Database();
        $db =$database->getConnexion();

        $user = new User($db);
        $user->firstname = $_POST["firstname"];
        $user->lastname = $_POST["lastname"];
        $user->email = $_POST["email"];
        $user->mobile = $_POST["mobile"];
        $user->birth = $reorganisedDate;
        $user->password = $_POST["password"];
        $createUser = $user->createUser();

        //Si il c'est une réussite, on continue.
        if($createUser !== 500) {
            session_start();
            $_SESSION["logged"] = true;
            $_SESSION["firstname"] = $_POST["firstname"];
            $_SESSION["lastname"] = $_POST["lastname"];

            //On redirige à la page d'accueil
            header("location:account.php");
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
    <script src="inscription.js"></script>
</head>
<body class="w-full h-full">
    <section class="connexionPage w-full h-full flex justify-center items-center">
        <section class="formContainer flex flex-col items-center w-fit p-20 bg-white rounded-lg">
            <a href="index.php">
                <img src="images/kouerLogo.svg" class="w-40">
            </a>
            <h2 class="text-green-500 font-semibold">Content de vous voir !</h2>
            <form action="inscription.php" method="post" class="flex flex-col mt-5">
                <div class="flex justify-between double-input">
                    <div class="flex flex-col">
                        <label for="firstname" class="text-gray-400 pl-4">Prénom</label>
                        
                        <?php
                            if($errorFirstname) {
                                echo "<input type='text' id='firstname' name='firstname' class='bg-gray-200 rounded-full p-2 border-red-500 border-2'>";
                            } else {
                                if(array_key_exists("firstname", $_POST)) {
                                    echo "<input type='text' id='firstname' name='firstname' class='bg-gray-200 rounded-full p-2 border-transparent border-2' value='" . $_POST['firstname'] . "'>";
                                } else {
                                    echo "<input type='text' id='firstname' name='firstname' class='bg-gray-200 rounded-full p-2 border-transparent border-2'>";
                                }
                            }
                        ?>

                    </div>

                    <div class="flex flex-col">
                        <label for="lastname" class="text-gray-400 pl-4">Nom</label>
                        
                        <?php
                            if($errorLastname) {
                                echo "<input type='text' id='lastname' name='lastname' class='bg-gray-200 rounded-full p-2 border-red-500 border-2'>";
                            } else {
                                if(array_key_exists("lastname", $_POST)) {
                                    echo "<input type='text' id='lastname' name='lastname' class='bg-gray-200 rounded-full p-2 border-transparent border-2' value='" . $_POST['lastname'] . "'>";
                                } else {
                                    echo "<input type='text' id='lastname' name='lastname' class='bg-gray-200 rounded-full p-2 border-transparent border-2'>";
                                }
                            }
                        ?>

                    </div>
                </div>

                <div class="flex flex-col mt-5">
                    <label for="email" class="text-gray-400 pl-4">Adresse Email</label>
                    
                    <?php
                        if($errorEmail) {
                            echo "<input type='email' id='email' name='email' class='bg-gray-200 rounded-full p-2 border-red-500 border-2'>";
                        } else {
                            if(array_key_exists("email", $_POST)) {
                                echo "<input type='email' id='email' name='email' class='bg-gray-200 rounded-full p-2 border-transparent border-2' value='" . $_POST['email'] . "'>";
                            } else {
                                echo "<input type='email' id='email' name='email' class='bg-gray-200 rounded-full p-2 border-transparent border-2'>";
                            }
                        }
                    ?>

                </div>

                <div class="flex justify-between double-input mt-5">
                    <div class="flex flex-col">
                        <label for="mobile" class="text-gray-400 pl-4">Téléphone</label>
                        
                        <?php
                            if($errorMobile) {
                                echo "<input type='mobile' id='mobile' name='mobile' class='bg-gray-200 rounded-full p-2 border-red-500 border-2'>";
                            } else {
                                if(array_key_exists("mobile", $_POST)) {
                                    echo "<input type='mobile' id='mobile' name='mobile' class='bg-gray-200 rounded-full p-2 border-transparent border-2' value='" . $_POST['mobile'] . "'>";
                                } else {
                                    echo "<input type='mobile' id='mobile' name='mobile' class='bg-gray-200 rounded-full p-2 border-transparent border-2'>";
                                }
                            }
                        ?>

                    </div>

                    <div class="flex flex-col">
                        <label for="birth" class="text-gray-400 pl-4">Date de naissance</label>
                        
                        <?php
                            if($errorBirth) {
                                echo "<input type='text' id='birth' name='birth' class='bg-gray-200 rounded-full p-2 border-red-500 border-2'> onkeyup='correctBirth()'";
                            } else {
                                if(array_key_exists("birth", $_POST)) {
                                    echo "<input type='text' id='birth' name='birth' class='bg-gray-200 rounded-full p-2 border-transparent border-2' value='" . $_POST['birth'] . "' onkeyup='correctBirth()'>";
                                } else {
                                    echo "<input type='text' id='birth' name='birth' class='bg-gray-200 rounded-full p-2 border-transparent border-2' onkeyup='correctBirth()'>";
                                }
                            }
                        ?>

                    </div>
                </div>

                <div class="flex flex-col mt-5">
                    <label for="password" class="text-gray-400 pl-4">Mot de passe</label>

                    <?php
                      if($errorPassword) {
                        echo "<input type='password' id='password' name='password' class='bg-gray-200 rounded-full p-2 border-red-500 border-2' onkeyup='correctMdp()'>";
                    } else {
                        echo "<input type='password' id='password' name='password' class='bg-gray-200 rounded-full p-2 border-transparent border-2' onkeyup='correctMdp()'>";
                    }
                    ?>
                    <p class="text-red-500 mt-3" id="minuscule">1 caractère minuscule</p>
                    <p class="text-red-500" id="majuscule">1 caractère majuscule</p>
                    <p class="text-red-500" id="chiffre">1 chiffre</p>
                    <p class="text-red-500" id="special">1 caractère spécial</p>
                    <p class="text-red-500" id="minimum">Minimum 8 caractère</p>
                </div>

                <div class="flex flex-col mt-5">
                    <label for="confirmPassword" class="text-gray-400 pl-4">Confirmer le mot de passe</label>
                    
                    <?php
                        if($errorConfirmPassword) {
                            echo "<input type='password' id='confirmPassword' name='confirmPassword' class='bg-gray-200 rounded-full p-2 border-red-500 border-2'>";
                        } else {
                            if(array_key_exists("confirmPassword", $_POST)) {
                                echo "<input type='password' id='confirmPassword' name='confirmPassword' class='bg-gray-200 rounded-full p-2 border-transparent border-2' value='" . $_POST['confirmPassword'] . "'>";
                            } else {
                                echo "<input type='password' id='confirmPassword' name='confirmPassword' class='bg-gray-200 rounded-full p-2 border-transparent border-2'>";
                            }
                        }
                    ?>
                </div>

                <div class="flex items-start cgu-box gap-3 mt-5">
                    <input onclick="cguBox()" id="CGU" type="checkbox">
                    <label for="CGU">J’ai lu et j’accepte les <a href="https://www.kouer.fr/cgv-cgu">Conditions Générales d'Utilisation et les Conditions Générales de Vente</a> & <a href="https://www.kouer.fr/politique-de-confidentialite">les Politique de confidentialité</a> de Kouer</label>
                </div>
                
                <?php
                if($createUser == 500) {
                    echo "<p class='text-red-500 text-center'>L'utilisateur n'a pas pu être enregistré dans la base de données.</p>";
                }
                ?>
                
                <button id="sendButton" type="submit" class="mt-5 bg-green-500 text-white rounded-full py-2 connexion-button font-semibold" disabled>Je crée mon compte</button>
            </form>
        </section>
    </section>
</body>
</html>