<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>indkøbskurv</title>

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
<section class="d-flex justify-content-center rounded-4">
<div class="row  w-97 mb-5 rounded-4">
    <div class="bg-kurv col-12 col-md-8 rounded-start d-lg-block d-none ">
        <div class="d-flex flex-column">
            <div class="d-flex flex-row justify-content-md-between  justify-content-center gx-0">
                <h3 class="p-3 mt-3">Indkøbskurv</h3>
                <p class="d-md-flex align-items-center p-3 mt-3">varer</p>
            </div>
            <div class="d-flex justify-content-center mt-5 mb-5">
            <div class="lineind"></div>
            </div>
            <div id="delete"  class="d-flex flex-row justify-content-around ">

                <div>
                    <img src="img/vandhane.png">
                </div>

                <div class="d-flex flex-column align-items-center justify-content-center">
                    <p>Aquaguard</p>
                    <p>Vandsensor</p>
                </div>

                <div class="d-flex flex-row align-items-center justify-content-center">
                    <button size="1px" class="m-3 border-0 bg-kurv" value="-"  onclick='process(-1, "v")'>-</button>
                    <input id='v' name='v' type="number"  value="1" min="0" max="10">
                    <button size="1px"  class="m-3 border-0 bg-kurv" value="+" onclick='process(+1, "v")'>+</button>
                </div>

                <div class=" d-flex align-items-center">
                    <p>149,00 DKK</p>
                </div>

                <div class="align-items-center d-flex  ">
                    <button class="border-0 bg-kurv" onclick="myFunction()">x</button>
                </div>

            </div>
            <div  class="d-flex justify-content-center mt-5 mb-5">
                <div  class="lineind"></div>
            </div>





            <div id="delete2" class="d-flex flex-row justify-content-around">
                <div>
                    <img src="img/vandhane.png">
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <p>Aquaguard</p>
                    <p>Vandsensor</p>
                </div>

                <div class="d-flex flex-row align-items-center justify-content-center">
                    <button size="1px" class="m-3 border-0 bg-kurv" value="-"  onclick='process(-1, "v2")'>-</button>
                    <input id='v2' name='v' type="number"  value="1" min="0" max="10">
                    <button size="1px"  class="m-3 border-0 bg-kurv" value="+" onclick='process(+1, "v2")'>+</button>
                </div>

                <div class="d-flex  align-items-center">
                    <p>149,00 DKK</p>
                </div>

                <div class="align-items-center d-flex">
                    <p>x</p>
                </div>
            </div>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <div class="lineind"></div>
            </div>

            <div class="d-flex flex-row mb-5 justify-content-around ">
                <div>
                    <img src="img/vandhane.png">
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center">
                    <p>Aquaguard</p>
                    <p>Vandsensor</p>
                </div>

                <div class="d-flex flex-row align-items-center justify-content-center">
                        <button size="1px" class="m-3 border-0 bg-kurv" value="-"  onclick='process(-1, "v3")'>-</button>
                        <input id='v3' name='v' type="number"  value="1" min="0" max="10">
                        <button size="1px"  class="m-3 border-0 bg-kurv" value="+" onclick='process(+1, "v3")'>+</button>
                </div>

                <div class="align-items-center d-flex">
                    <p>149,00 DKK</p>
                </div>

                <div class="align-items-center d-flex">
                    <button class="border-0 bg-kurv" onclick="myFunction()">x</button>
                </div>
            </div>

        </div>
    </div>

   <!--mobil v-->
    <div class="bg-kurv col-12 col-md-8 rounded-start d-lg-none">
        <div class="d-flex flex-column">
            <div class="d-flex flex-row justify-content-md-between  justify-content-center gx-0">
                <h3 class="p-3 mt-3">Indkøbskurv</h3>
            </div>
            <div class="d-flex justify-content-center mt-5 mb-5">
                <div class="lineind"></div>
            </div>
            <div  class="d-flex flex-column justify-content-around">

                <div class="align-items-center d-flex justify-content-end">
                    <button class="border-0 bg-kurv" onclick="myFunction()">x</button>
                </div>
                <div class="row">
                    <div class="col-6">
                         <img src="img/vandhane.png">
                    </div>

                    <div class="d-flex flex-column align-items-center justify-content-center col-6">
                        <p>Aquaguard</p>
                        <p>Vandsensor</p>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-center">
                    <button size="1px" class="m-3 border-0 bg-kurv" value="-"  onclick='process(-1, "v4")'>-</button>
                    <input id='v4' name='v' type="number"  value="1" min="0" max="10">
                    <button size="1px"  class="m-3 border-0 bg-kurv" value="+" onclick='process(+1, "v4")'>+</button>
                </div>

                <div class="d-flex align-items-center justify-content-center mt-3">
                    <p>149,00 DKK</p>
                </div>

            </div>

            <div class="d-flex justify-content-center mt-5 mb-5">
                <div class="lineind"></div>

            </div>
            <div class="d-flex flex-column justify-content-around">

                <div class="align-items-center d-flex justify-content-end">
                    <button class="border-0 bg-kurv" onclick="myFunction()">x</button>
                </div>
                <div class="row">
                    <div class="col-6">
                        <img src="img/vandhane.png">
                    </div>

                    <div class="d-flex flex-column align-items-center justify-content-center col-6">
                        <p>Aquaguard</p>
                        <p>Vandsensor</p>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-center">
                    <button size="1px" class="m-3 border-0 bg-kurv" value="-"  onclick='process(-1, "v5")'>-</button>
                    <input id='v5' name='v' type="number"  value="1" min="0" max="10">
                    <button size="1px"  class="m-3 border-0 bg-kurv" value="+" onclick='process(+1, "v5")'>+</button>
                </div>

                <div class="d-flex align-items-center justify-content-center mt-3">
                    <p>149,00 DKK</p>
                </div>

            </div>

            <div class="d-flex justify-content-center mt-5 mb-5">
                <div class="lineind"></div>
            </div>

            <div class="d-flex flex-column justify-content-around">

                <div class="align-items-center d-flex justify-content-end">
                    <button class="border-0 bg-kurv" onclick="myFunction()">x</button>
                </div>
                <div class="row">
                    <div class="col-6">
                        <img src="img/vandhane.png">
                    </div>

                    <div class="d-flex flex-column align-items-center justify-content-center col-6">
                        <p>Aquaguard</p>
                        <p>Vandsensor</p>
                    </div>
                </div>
                <div class="d-flex flex-row align-items-center justify-content-center">
                    <button size="1px" class="m-3 border-0 bg-kurv" value="-"  onclick='process(-1, "v6")'>-</button>
                    <input id='v6' name='v' type="number"  value="1" min="0" max="10">
                    <button size="1px"  class="m-3 border-0 bg-kurv" value="+" onclick='process(+1, "v6")'>+</button>
                </div>

                <div class="d-flex align-items-center justify-content-center mt-3 mb-5">
                    <p>149,00 DKK</p>
                </div>

            </div>



        </div>
    </div>

    <div class="col-12 col-md-4 bg-text-p rounded-end">
        <div class="d-flex flex-column">
            <div>
                <h3 class="text-light p-3 mt-3">
                    Opsummering
                </h3>
            </div>

            <div class="d-flex justify-content-center mt-5 mb-3">
                <div class="lineind bg-light"></div>
            </div>

            <div class="d-flex flex-row justify-content-between">
                <p class="text-light m-3">3 Items</p>
                <p class="text-light m-3">447,00 DKK</p>
            </div>

            <div>
            <select class="form-select" aria-label="Default select example">
                <option selected>Levering</option>
                <option value="1">PostNord Collect-44,00 kr.</option>
                <option value="2">Dao Hjemmelevering- 39,00 kr</option>
            </select>
            </div>


            <div class="d-flex flex-column">
               <p class="mt-3 mb-3 text-light">Rabatkode</p>
                <input class="rounded-2 border-0 pt-2 pb-2" type="text" placeholder="Indtast rabatkode her">
            </div>


            <div class="d-flex justify-content-center mt-5 mb-3">
                <div class="lineind bg-light"></div>
            </div>


            <div class="d-flex flex-row justify-content-between ">
                <p class="text-light m-3">Total pris</p>
                <p class="text-light m-3">486,00 DKK</p>
            </div>

            <div>
                <a class="btn bg-btn-p d-flex text-light justify-content-center" href="#">Gå til checkout</a>
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

</section>




<?php include "includes/footer.php";?>
<script src="js/delete.js"></script>
<script src="js/plusminusbtn.js"></script>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>



</body>
</html>
