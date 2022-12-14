

<!--select produkter fra sql-->
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
        echo $produkter->prodNavn?> | køb filtre fra Aquaguard</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="Aquaguard filter til din vandhane i køkkenet, bryggerset eller på badeværelset.">
    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body>
<!--navbar-->
<?php include "includes/nav.php"?>
<div class="d-flex justify-content-center flex-column">

    <div class="bg-kurv">
        <div class="row gx-0 d-flex flex-column flex-md-row">
            <!--img-->
            <div class="d-flex flex-column flex-md-row">
            <img class="obj col-12 col-md-6" src="uploads/<?php echo $produkter->prodImg;?>"
            </div>
            <!--produktNavn og produktbeskrivelse-->
            <div class="col-12 col-md-6 d-flex align-items-center ">
               <div class="mx-5">
                   <h1 class="mt-5">
                       <?php
                       echo $produkter->prodNavn
                       ?>
                   </h1>

                   <p>
                       <?php
                       echo $produkter->prodBas
                       ?>
                   </p>
                    <!--select størrelse-->
                   <div>
                       <p>Størrelse</p>
                       <select class="form-select" aria-label="Default select example">
                           <option selected>17-17.5 mm</option>
                           <option value="1">19.5-20 mm</option>
                           <option value="2">21.5-22 mm</option>
                           <option value="2">23.5-24 mm</option>
                       </select>
                   </div>

                   <!--select farve-->
                   <div>
                       <p>Farve</p>
                       <select class="form-select" aria-label="Default select example">
                           <option selected>Stål</option>
                           <option value="1">Messing</option>
                           <option value="2">Sort</option>
                       </select>
                   </div>

                   <!--btn tilføj til kurv-->
                   <div class="d-md-flex">
                       <a class="btn bg-btn-p d-flex text-light justify-content-center mt-5" href="Indkøbskurv.php">Tilføj til kurv</a>
                   </div>
                    <!--tilbage til produkter-->
                   <div class="d-flex flex-row justify-content-center mt-5">
                       <a class="d-flex flex-row text-decoration-none" href="shop.php">
                           <img  class="mb-5 text-dark" src="img/Tilbag%20b.svg">
                           <p class="text-dark mb-5">Tilbage til produkter</p>
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

<!--footer-->
<?php include "includes/footer.php"?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--navbar active-->
<script src="js/active.js"></script>


</body>
</html>
