<header class="w-full flex-col px-10 py-5 align-middle">
    <div class="w-full flex justify-between align-middle gap-x-36">
    <a href="index.php">
        <img src="images/kouerLogo.svg" class="w-36">
    </a>

    <div class="flex grow searchbar">
        <input type="text" placeholder="Quel produit recherchez-vous ?" class="border border-gray-400 rounded-lg border-1 px-5 py-2 placeholder-green-500 font-semibold w-full">
        <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/kouer/icons/searchsvgicongreen.svg" class="w-7">
    </div>

    <div class="flex justify-between align-middle gap-x-5 connexion">
        <div onmouseenter="showConnexionMenu()" onmouseleave="showConnexionMenu()">
        <a href="connexion.php" class="flex gap-x-2 identity">
            <img src="https://transcendance-avatars.s3.eu-west-3.amazonaws.com/photo.svg">
            <div class="flex-col w-full">

            <?php
            if($logged) {
                echo "<p class='font-semibold text-green-700'>".$_SESSION['firstname']." ".$_SESSION["lastname"]."</p>";
            } else {
                echo "<p class='font-semibold text-green-700'>Identifiez-vous</p>";
            }
            ?>

            <span class="text-xs">Compte et commandes</span>
            </div>
            <img src="https://transcendance-avatars.s3.eu-west-3.amazonaws.com/Frame+73.svg">
        </a>
        
        <div class=" bg-white connexion-menu border-gray-300 border-2 rounded-md">

            <?php
            if($logged){
            echo "<a href='account.php'>Mon compte</a>";
            echo "<a href='deconnexion.php'>Se déconnecter</a>";
            } else {
            echo "<a href='connexion.php' class='text-green-500 font-semibold'>Se connecter</a>";
            echo "<a href='inscription.php'>S'inscrire</a>";
            }
            ?>
        </div>
        </div>

        <a class="flex align-middle">
        <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/website/navbar/cart/Group%201225.svg" class="w-7">
        </a>

        <a class="flex align-middle">
        <img src="https://transcendance-avatars.s3.eu-west-3.amazonaws.com/Group+84.svg" class="w-7">
        </a>
    </div>
    </div>

    <nav class="flex justify-between w-full mt-5">
    <a href="" class="flex flex-col items-center">
        <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/kouer/menu_icons/tous_les_produits.svg" class="w-14">
        <span class="text-sm">Tous les produits</span>
    </a>

    <a href="" class="flex flex-col items-center">
        <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/kouer/menu_icons/viandes__charcuteries.svg" class="w-14">
        <span class="text-sm">Viandes et Charcuteries</span>
    </a>

    <a href="" class="flex flex-col items-center">
        <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/kouer/menu_icons/poissons__fruits_de_mer.svg" class="w-14">
        <span class="text-sm">Poisson & Fruits de mers</span>
    </a>

    <a href="" class="flex flex-col items-center">
        <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/kouer/menu_icons/boissons__alcools.svg" class="w-14">
        <span class="text-sm">Boissons</span>
    </a>

    <a href="" class="flex flex-col items-center">
        <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/kouer/menu_icons/epicerie_salee.svg" class="w-14">
        <span class="text-sm">Epicerie Saleé</span>
    </a>

    <a href="" class="flex flex-col items-center">
        <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/kouer/menu_icons/epicerie_sucree.svg" class="w-14">
        <span class="text-sm">Epicerie Sucrée</span>
    </a>

    <a href="" class="flex flex-col items-center">
        <img src="https://fbnjznanxacfwrzlkhxl.supabase.co/storage/v1/object/public/kouer/menu_icons/laits__fromages.svg" class="w-14">
        <span class="text-sm">Fromagerie & Produits laitiers</span>
    </a>
    </nav>
</header>