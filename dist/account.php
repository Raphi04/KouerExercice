<?php
session_start();
$logged = false;

if(!array_key_exists("logged", $_SESSION) || $_SESSION["logged"] !== true) {
  header("location:connexion.php");
} else {
    $logged = true;
}
?>

<html lang="fr">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Kouer - Le meilleur des producteurs à votre porte</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="custom.css">
    <script src="script.js"></script>
  </head>
  <body>
    <?php
        include "header.php";
    ?>
    <section class="flex flex-col px-16 pt-5 pb-16">
        <div class="flex gap-3">
            <a href="index.php" class="text-green-500">Accueil</a>
            <p class="text-green-500">/</p>
            <a href="account.php" class="text-green-500">Mon Compte</a>
        </div>

        <div class="flex items-center gap-5 mt-10 my-profile">
            <img src="https://transcendance-avatars.s3.eu-west-3.amazonaws.com/photo.svg" class="w-32">
            <div class="flex flex-col">
                <?php
                    echo "<p>".$_SESSION["firstname"]." ".$_SESSION["lastname"]."</p>";
                ?>
            </div>
        </div>

        <hr class="mt-5">

        <section class="flex flex-wrap w-full mt-10 gap-5">
            <div class="flex border-gray-400 border-2 functionality p-5 rounded-lg">
                <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/website/account/icons/mes-parametres.svg" class="w-36">
                <div class="flex flex-col">
                    <h3>Mes paramètre</h3>
                    <p class="text-gray-500">Modifier l'adresse e-mail, le nom et le numéro de téléphone mobile</p>
                </div>
            </div>

            <div class="flex border-gray-400 border-2 functionality p-5 rounded-lg">
                <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/website/account/icons/mes-commandes.svg" class="w-36">
                <div class="flex flex-col">
                    <h3>Mes commandes</h3>
                    <p class="text-gray-500">Suivre vos commandes ou voir vos factures</p>
                </div>
            </div>

            <div class="flex border-gray-400 border-2 functionality p-5 rounded-lg">
                <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/website/account/icons/mes-parametres.svg" class="w-36">
                <div class="flex flex-col">
                    <h3>Mes paramètre</h3>
                    <p class="text-gray-500">Modifier l'adresse e-mail, le nom et le numéro de téléphone mobile</p>
                </div>
            </div>

            <div class="flex border-gray-400 border-2 functionality p-5 rounded-lg">
                <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/website/account/icons/mes-commandes.svg" class="w-36">
                <div class="flex flex-col">
                    <h3>Mes commandes</h3>
                    <p class="text-gray-500">Suivre vos commandes ou voir vos factures</p>
                </div>
            </div>
        </section>
    </section>
  </body>
</html>