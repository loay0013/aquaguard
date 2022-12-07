<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>Sigende titel</title>

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
<?php include "includes/nav.php";?>

<div class="row gx-0 ">
    <div class="bg-kurv col-12 col-md-8">
        <div class="d-flex flex-column">
            <div class="row gx-0">
                <h1 class="text-light">Indkøbskurv</h1>
                <p>Items</p>
            </div>
            <div class="line"></div>
            <div class="d-flex flex-row">
                <div>
                    <img src="img/vandhane.png">
                </div>
                <div class="d-flex flex-column">
                    <p>Aquaguard</p>
                    <p>Vandsensor</p>
                </div>

                <div class="d-flex flex-row">
                    <p>+</p>
                    <input type="number" placeholder="1">
                    <p>-</p>
                </div>

                <div>
                    <p>149,00 DKK</p>
                </div>

                <dix>
                    <p>x</p>
                </dix>
            </div>

        </div>
    </div>

    <div class="col-12 col-md-4 bg-text-p">
        <div class="d-flex flex-column">
            <div>
                <h3 class="text-light">
                    Opsummering
                </h3>
            </div>

            <div class="line"></div>
            <div class="d-flex flex-row">
                <p>3 Items</p>
                <p>447,00 DKK</p>
            </div>

            <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Levering</option>
                <option value="1">PostNord Collect-44,00 kr.</option>
                <option value="2">Dao Hjemmelevering- 39,00 kr</option>
            </select>
            </div>


            <div class="d-flex flex-column">
               <p>Rabatkode</p>
                <input type="text" placeholder="Indtast rabatkode her">
            </div>

            <div class="line"></div>

            <div class="d-flex flex-row">
                <p>Total pris</p>
                <p>486,00 DKK</p>
            </div>

            <div>
                <a class="btn bg-btn-p" href="#">Gå til checkout</a>
            </div>

            <div>
                <a href="shop.php">
                    <img src="img/icon%20Tilbage.svg">
                    <p>Tilbage til produkter</p>
                </a>
            </div>

        </div>
    </div>


</div>








<?php include "includes/footer.php";?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
