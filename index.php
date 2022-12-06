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

    <div>
        <img src="img/mockup.png" alt="app">
    </div>

   <div>
        <h2>
            Aquaguard-appen
        </h2>
       <p>
           En helt ny app til dit Aquaguard-filter. De mange features giver dig
           et godt overblik over din hustands vandforbrug. Du får det hele samlet
           på ét sted med lækkert design.
       </p>
       <p>
           Aquaguard-appen er udviklet specielt til dig. I appen kan du registrere,
           hvor i dit hus du har filtrene siddende på vandhaner og brusere. Du kan se, hvor
           meget vand du forbruger i de forskellige rum i dit hus, og hvor mange penge,
           du har sparet i dag, på en uge, eller du kan tracke for en længere periode.
       </p>

       <div>
            <img src="img/app%20store.svg" alt="app store">
            <img src="img/google%20play.svg" alt="google play">
       </div>
   </div>

</section>



<section>

    <div>

        <div>
            <div>
               <img src="img/returret.svg">
                <p>14 dages returret</p>
                <p>Du får altid 14 dages returret.
                    Det synes vi er god service.</p>
            </div>

            <div>
                <img src="img/betaling.svg">
                <p>Fleksibel betaling</p>
                <p>Du vælger mellem en række
                    forskellige betalingsmuligheder.</p>
            </div>

            <div>
                <img src="img/levering.svg">
                <p>Gratis levering</p>
                <p>Du får gratis levering,
                    når du køber for 500 DKK.</p>
            </div>

            <div>
                <img src="img/support.svg">
                <p>Online support</p>
                <p>Vi tilbyder gratis online support,
                    hvor du kan stille spørgsmål.</p>
            </div>

        </div>

    </div>

</section>

<section>
    <div>
        <div>
            <img src="img/jacek-dylag-Vve7XkiUq_Y-unsplash.png">
        </div>
        <div>
            <h3>
            Abonner på Aquaguards nyhedsbrev
            og få nyheder og tips.
            </h3>

            <input class="label-kontakt" type="email" placeholder="Din email">
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Launch demo modal
            </button>

            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            ...
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary">Save changes</button>
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
