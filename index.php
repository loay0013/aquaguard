<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html class="h-100" lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>aquaguard</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">


    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="h-100">
<?php include "includes/nav.php"; ?>

<header>
    <div class="video">

        <video playsinline autoplay muted loop id="myVideo" class="d-block position-absolute">
            <source src="img/">
        </video>
    </div>

    <div>
        <h1>
            Et revolutionerende produkt
            til dig og klimaet
        </h1>
    </div>


    <div>
        <a class="btn d-flex justify-content-center rounded-0">
            PRODUKTER
        </a>
    </div>

</header>


<section>

    <div class="col-12 col-md-6">
        
        <div class="col-12 col-md-6">
            <img src="img/faucet.png" alt="vandhane">
        </div>
        
        <div class="col-md-6 col-12">
            <h2>
                Aquaguard
            </h2>
            <p>
                Filtre til vandhaner og brusere udviklet med fokus på flot design.
                De smarte filtre giver dig kontrol over dit vandforbrug.
            </p>

            <p>
                Med Aquaguard-appen har du overblik over, hvor meget vand din hustand bruger
                ved hver vandudgang. Du sætter filteret på dine vandhaner og brusere, og så tracker
                den dit forbrug med sensorer. Auqaguard-filterene er til dig, der vil spare penge, vise
                miljøhensyn og følge med i dit vandforbrug.
            </p>


            <div>
                <a class="btn d-flex justify-content-center rounded-0">
                    PRODUKTER
                </a>
            </div>
        </div>
        
    </div>


</section>


<section>


</section>









<?php include "includes/footer.php"; ?>

<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
