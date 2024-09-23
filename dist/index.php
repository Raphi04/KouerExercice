<?php
session_start();
$logged = false;

if(array_key_exists("logged", $_SESSION) && $_SESSION["logged"] == true) {
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
    
    <section class="flex flex-col w-full presentation p-20">
      <h2 class="text-green-600 font-semibold">Le meilleur des producteurs <br>directement chez vous!</h2>
      <p class="text-white font-semibold my-5">Commandez chez Kouer et soutenez l’artisanat local.<br>Recevez vos commandes <br>à domicile en 48h !</p>
      <a class="bg-green-600 text-white font-semibold w-fit rounded-lg py-2 px-4">Voir tous nos produits ></a>
    </section>

    <section class="flex flex-col p-10">
      <section class="flex flex-col category-container">
        <h2>Notre sélection</h2>
        <div class="flex gap-4">

          <a class="flex flex-col article rounded-md border-gray-300 border-2">
            <div class="rounded-md product">
              <div class="origin rounded-md">
                <img src="images/france.svg">
              </div>
            </div>

            <div class="flex flex-col p-2 w-full bottom gap-2">
              <div class="flex flex-col w-full name">
                <p class="font-semibold">Sorbet Groseilles 0.5L</p>
                <span class="text-gray-500">DELICES FOREZIENS</span>
              </div>

              <div class="flex justify-between w-full items-center">
                <div class="flex flex-col">
                  <div class="flex items-end gap-1">
                    <span class="text-green-500 font-semibold price">7.9€</span>
                    <span class="quantity text-gray-500">0.5L</span>
                  </div>
                  <span class="text-green-500 font-semibold price-quantity">7.90€/L</span>
                </div>
                <button href="">
                  <img class="w-14" src="images/shop.webp">
                </button>
              </div>
            </div>
          </a>

          <a class="flex flex-col article rounded-md border-gray-300 border-2">
            <div class="rounded-md product">
              <div class="origin rounded-md">
                <img src="images/france.svg">
              </div>
            </div>

            <div class="flex flex-col p-2 w-full bottom gap-2">
              <div class="flex flex-col w-full name">
                <p class="font-semibold">Sorbet Groseilles 0.5L</p>
                <span class="text-gray-500">DELICES FOREZIENS</span>
              </div>

              <div class="flex justify-between w-full items-center">
                <div class="flex flex-col">
                  <div class="flex items-end gap-1">
                    <span class="text-green-500 font-semibold price">7.9€</span>
                    <span class="quantity text-gray-500">0.5L</span>
                  </div>
                  <span class="text-green-500 font-semibold price-quantity">7.90€/L</span>
                </div>
                <button href="">
                  <img class="w-14" src="images/shop.webp">
                </button>
              </div>
            </div>
          </a>

          <a class="flex flex-col article rounded-md border-gray-300 border-2">
            <div class="rounded-md product">
              <div class="origin rounded-md">
                <img src="images/france.svg">
              </div>
            </div>

            <div class="flex flex-col p-2 w-full bottom gap-2">
              <div class="flex flex-col w-full name">
                <p class="font-semibold">Sorbet Groseilles 0.5L</p>
                <span class="text-gray-500">DELICES FOREZIENS</span>
              </div>

              <div class="flex justify-between w-full items-center">
                <div class="flex flex-col">
                  <div class="flex items-end gap-1">
                    <span class="text-green-500 font-semibold price">7.9€</span>
                    <span class="quantity text-gray-500">0.5L</span>
                  </div>
                  <span class="text-green-500 font-semibold price-quantity">7.90€/L</span>
                </div>
                <button href="">
                  <img class="w-14" src="images/shop.webp">
                </button>
              </div>
            </div>
          </a>

          <a class="flex flex-col article rounded-md border-gray-300 border-2">
            <div class="rounded-md product">
              <div class="origin rounded-md">
                <img src="images/france.svg">
              </div>
            </div>

            <div class="flex flex-col p-2 w-full bottom gap-2">
              <div class="flex flex-col w-full name">
                <p class="font-semibold">Sorbet Groseilles 0.5L</p>
                <span class="text-gray-500">DELICES FOREZIENS</span>
              </div>

              <div class="flex justify-between w-full items-center">
                <div class="flex flex-col">
                  <div class="flex items-end gap-1">
                    <span class="text-green-500 font-semibold price">7.9€</span>
                    <span class="quantity text-gray-500">0.5L</span>
                  </div>
                  <span class="text-green-500 font-semibold price-quantity">7.90€/L</span>
                </div>
                <button href="">
                  <img class="w-14" src="images/shop.webp">
                </button>
              </div>
            </div>
          </a>

          <a class="flex flex-col article rounded-md border-gray-300 border-2">
            <div class="rounded-md product">
              <div class="origin rounded-md">
                <img src="images/france.svg">
              </div>
            </div>

            <div class="flex flex-col p-2 w-full bottom gap-2">
              <div class="flex flex-col w-full name">
                <p class="font-semibold">Sorbet Groseilles 0.5L</p>
                <span class="text-gray-500">DELICES FOREZIENS</span>
              </div>

              <div class="flex justify-between w-full items-center">
                <div class="flex flex-col">
                  <div class="flex items-end gap-1">
                    <span class="text-green-500 font-semibold price">7.9€</span>
                    <span class="quantity text-gray-500">0.5L</span>
                  </div>
                  <span class="text-green-500 font-semibold price-quantity">7.90€/L</span>
                </div>
                <button href="">
                  <img class="w-14" src="images/shop.webp">
                </button>
              </div>
            </div>
          </a>

          <a class="flex flex-col article rounded-md border-gray-300 border-2">
            <div class="rounded-md product">
              <div class="origin rounded-md">
                <img src="images/france.svg">
              </div>
            </div>

            <div class="flex flex-col p-2 w-full bottom gap-2">
              <div class="flex flex-col w-full name">
                <p class="font-semibold">Sorbet Groseilles 0.5L</p>
                <span class="text-gray-500">DELICES FOREZIENS</span>
              </div>

              <div class="flex justify-between w-full items-center">
                <div class="flex flex-col">
                  <div class="flex items-end gap-1">
                    <span class="text-green-500 font-semibold price">7.9€</span>
                    <span class="quantity text-gray-500">0.5L</span>
                  </div>
                  <span class="text-green-500 font-semibold price-quantity">7.90€/L</span>
                </div>
                <button href="">
                  <img class="w-14" src="images/shop.webp">
                </button>
              </div>
            </div>
          </a>

          <a class="flex flex-col article rounded-md border-gray-300 border-2">
            <div class="rounded-md product">
              <div class="origin rounded-md">
                <img src="images/france.svg">
              </div>
            </div>

            <div class="flex flex-col p-2 w-full bottom gap-2">
              <div class="flex flex-col w-full name">
                <p class="font-semibold">Sorbet Groseilles 0.5L</p>
                <span class="text-gray-500">DELICES FOREZIENS</span>
              </div>

              <div class="flex justify-between w-full items-center">
                <div class="flex flex-col">
                  <div class="flex items-end gap-1">
                    <span class="text-green-500 font-semibold price">7.9€</span>
                    <span class="quantity text-gray-500">0.5L</span>
                  </div>
                  <span class="text-green-500 font-semibold price-quantity">7.90€/L</span>
                </div>
                <button href="">
                  <img class="w-14" src="images/shop.webp">
                </button>
              </div>
            </div>
          </a>
        </div>
      </section>

    </section>
  </body>
</html>
