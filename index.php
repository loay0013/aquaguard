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
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@200;400&display=swap" rel="stylesheet">
    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="h-100">
<?php include "includes/nav.php"; ?>

<header class=" h-100 position-relative overflow">
    <div class="video">

        <video playsinline autoplay muted loop id="myVideo" class="d-block position-absolute">
            <source src="img/watertap.mp4">
        </video>
    </div>

    <div>
        <h1 class="text-center text-header">
            Et revolutionerende produkt<br>
            til dig og klimaet
        </h1>
    </div>

    <div class="btn-header">
        <a class="btn bg-btn-p d-flex justify-content-center ">
            <p class="text-light">PRODUKTER</p>
        </a>
    </div>

</header>


<section>

    <div class="container-fluid row mt-5">
        
        <div class="col-md-6 col-12">
            <img class="m-auto" src="img/faucet.png" alt="vandhane">
        </div>
        
        <div class="col-md-6 col-12 d-flex flex-column justify-content-center">
            <h2 class="m-4">
                Aquaguard
            </h2>
            <p class="m-4">
                Filtre til vandhaner og brusere udviklet med fokus på flot design.
                De smarte filtre giver dig kontrol over dit vandforbrug.
            </p>

            <p class="m-4">
                Med Aquaguard-appen har du overblik over, hvor meget vand din hustand bruger
                ved hver vandudgang. Du sætter filteret på dine vandhaner og brusere, og så tracker
                den dit forbrug med sensorer. Auqaguard-filterene er til dig, der vil spare penge, vise
                miljøhensyn og følge med i dit vandforbrug.
            </p>


            <div class="d-flex m-4">
                <a class="btn bg-btn-p d-flex justify-content-center">
                   <p class="text-light">PRODUKTER</p>
                </a>
            </div>
        </div>
        
    </div>


</section>



<section>
    <div class="row gx-0  mt-6 ms-md-5">
            <div class="col-12 col-md-6 order-2 ">
                  <img class="m-auto" src="img/mockup.png" alt="app">
            </div>

        <div class="col-md-6 col-12 order-1 d-flex flex-column justify-content-center ">
                 <h2 class="m-4">
                     Aquaguard-appen
                 </h2>
                 <p class="m-4">
                    En helt ny app til dit Aquaguard-filter. De mange features giver dig
                     et godt overblik over din hustands vandforbrug. Du får det hele samlet
                    på ét sted med lækkert design.
                </p>
                 <p class="m-4">
                     Aquaguard-appen er udviklet specielt til dig. I appen kan du registrere,
                    hvor i dit hus du har filtrene siddende på vandhaner og brusere. Du kan se, hvor
                     meget vand du forbruger i de forskellige rum i dit hus, og hvor mange penge,
                     du har sparet i dag, på en uge, eller du kan tracke for en længere periode.
                </p>

             <div class="d-flex flex-md-row flex-column ">
                 <img class="m-4" src="img/app%20store.svg" alt="app store">
                 <img class="m-4" src="img/google%20play.svg" alt="google play">
             </div>
        </div>
    </div>
</section>



<section class="d-flex justify-content-center mt-6">

    <div class="bg-box-p w-85 rounded-4">

        <div class="d-flex flex-column flex-md-row">
            <div class="m-5">
               <img class="m-auto" src="img/returret.svg">
                <p class="text-center mt-4">14 dages returret</p>
                <p class="text-center mt-3">Du får altid 14 dages returret.
                    Det synes vi er god service.</p>
            </div>

            <div class="m-5">
                <img class="m-auto" src="img/betaling.svg">
                <p  class="text-center mt-4">Fleksibel betaling</p>
                <p  class="text-center mt-3">Du vælger mellem en række
                    forskellige betalingsmuligheder.</p>
            </div>

            <div class="m-5">
                <img class="m-auto" src="img/levering.svg">
                <p  class="text-center mt-4">Gratis levering</p>
                <p  class="text-center mt-3">Du får gratis levering,
                    når du køber for 500 DKK.</p>
            </div>

            <div class="m-5">
                <img class="m-auto" src="img/support.svg">
                <p  class="text-center mt-4">Online support</p>
                <p  class="text-center mt-3">Vi tilbyder gratis online support,
                    hvor du kan stille spørgsmål.</p>
            </div>

        </div>

    </div>

</section>

<section>
    <div class="row gx-0 mt-6 mb-4 ">
        <div class="col-12 col-md-6 ">
            <img  src="img/jacek-dylag-Vve7XkiUq_Y-unsplash.png">
        </div>
        <div class="col-md-6 col-12 d-flex flex-column bg-text-p pt-5 ">
            <h4 class="text-center mt-md-5 text-light m-md-5">
            Abonner på Aquaguards nyhedsbrev
            og få nyheder og tips.
            </h4>
            <div class="d-flex flex-md-row flex-column justify-content-center mt-5">
                <input  class="label-kontakt m-md-4 m-3 rounded-2 p-2 border-0" type="email" placeholder="Din email">
                        <button type="button" class="btn bg-btn-p m-3 m-md-4" data-bs-toggle="modal" data-bs-target="#exampleModal">
                              <P>Tilmeld</P>
                        </button>
            </div>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Nyhedsbrev</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            Du er nu tilmeldt nyhedsbrevet
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>


</section>







<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<?php include "includes/footer.php"; ?>


</body>
</html>
