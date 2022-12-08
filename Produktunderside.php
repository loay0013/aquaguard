<?php
require "settings/init.php";
$bind =[":prodId"=> $_GET["prodId"]];
$produkter = $db->sql("SELECT * FROM produkter WHERE prodId =:prodId;", $bind);
?>




<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <?php

    foreach ($produkter as $produkter){
    ?>

    <title><?php
        echo $produkter->prodNavn?></title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<div class="d-flex justify-content-center">

    <div class="w-85 bg-kurv">

        <div class="row gx-0 d-flex flex-column flex-md-row">
            <div class="col-md-6 col-12">
            <img class="obj" src="uploads/<?php echo $produkter->prodImg;?>"
            </div>

            <div class="col-12 col-md-6">
               <div class="d-flex flex-column">
                   <h1>
                       <?php
                       echo $produkter->prodNavn
                       ?>
                   </h1>

                   <p>
                       <?php
                       echo $produkter->prodBas
                       ?>
                   </p>

                   <div>
                       <p>Størrelse</p>
                       <select class="form-select" aria-label="Default select example">
                           <option selected></option>
                           <option value="1"></option>
                           <option value="2"></option>
                       </select>
                   </div>


                   <div>
                       <p>Farve</p>
                       <select class="form-select" aria-label="Default select example">
                           <option selected>Stål</option>
                           <option value="1">Messing</option>
                           <option value="2">Sort</option>
                       </select>
                   </div>


                   <div>
                       <a class="btn bg-btn-p d-flex text-light justify-content-center" href="#">Tilføj til kurv</a>
                   </div>

                   <div class="d-flex flex-row justify-content-center mt-5">
                       <a class="d-flex flex-row text-decoration-none" href="shop.php">
                           <img  class="mb-5" src="img/icon%20Tilbage.svg">
                           <p class="text-light mb-5">Tilbage til produkter</p>
                       </a>
                   </div>

               </div>

            </div>
        </div>

    </div>


</div>







<?php
}
?>
</body>
</html>
