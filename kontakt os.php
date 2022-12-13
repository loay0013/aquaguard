<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html class="h-100" lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>kontakt os | Kontakt os her, så hjælper vi dig</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="Kontakt os hvis du har yderligere spørgsmål.
    Vi svarer altid så hurtigt vi kan for at hjælpe dig med at besvare dine spørgsmål.">
    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="h-100">
<?php include "includes/nav.php"; ?>

<section class="d-flex justify-content-center mt-md-6 h-650 mb-5 ">
    <div class="w-85 bg-text-p rounded-4">
        <div>
            <h1 class="text-center text-light mt-md-5 mt-3">
                Kontakt
            </h1>
            <div class="row gx-0">
               <div class="col-12 col-md-6">
                    <div class=" bg-text-p border-0 d-flex flex-column gap-5 justify-content-center m-5 ">
                        <input  id="name" class="rounded-2 border-0 p-2" placeholder="Dit navn" type="text">
                        <input id="email" class="rounded-2 border-0 p-2" placeholder="Din email" type="email">
                        <input id="message" class="rounded-2 border-0 py-5 p-2" placeholder="Din besked" type="text">
                        <div class="">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn bg-btn-p " data-bs-toggle="modal" data-bs-target="#exampleModal">
                                <P class="text-light">Send</P>
                            </button>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Kontakt os</h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Vi har modtaget din besked, og kontakter dig hurtigst muligt!
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Luk</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
               </div>
                <div class="col-md-6 col-12 d-flex flex-column justify-content-md-center">

                    <div class="d-flex justify-content-md-center my-3 gap-3 mx-5 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22px" height="22px" viewBox="0 0 18.927 15.142">
                            <path id="Icon_material-email" data-name="Icon material-email" d="M20.035,6H4.893A1.89,1.89,0,0,0,3.009,7.893L3,19.249a1.9,1.9,0,0,0,1.893,1.893H20.035a1.9,1.9,0,0,0,1.893-1.893V7.893A1.9,1.9,0,0,0,20.035,6Zm0,3.785-7.571,4.732L4.893,9.785V7.893l7.571,4.732,7.571-4.732Z" transform="translate(-3 -6)" fill="#fff"/>
                        </svg>
                        <p class="text-white footer-contact">info@aquaguard.dk</p>
                    </div>

                    <div class="d-flex justify-content-md-center my-3 mx-5 gap-4 align-items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="22px" viewBox="0 0 18.855 18.892">
                            <path id="Icon_feather-phone" data-name="Icon feather-phone" d="M22.022,17.144v2.844a1.9,1.9,0,0,1-2.067,1.9,18.761,18.761,0,0,1-8.181-2.91,18.486,18.486,0,0,1-5.688-5.688,18.761,18.761,0,0,1-2.91-8.219A1.9,1.9,0,0,1,5.062,3H7.906A1.9,1.9,0,0,1,9.8,4.631a12.172,12.172,0,0,0,.664,2.664,1.9,1.9,0,0,1-.427,2l-1.2,1.2a15.168,15.168,0,0,0,5.688,5.688l1.2-1.2a1.9,1.9,0,0,1,2-.427,12.173,12.173,0,0,0,2.664.664A1.9,1.9,0,0,1,22.022,17.144Z" transform="translate(-3.168 -3)" fill="#fff"/>
                        </svg>
                        <p class="text-white footer-contact">+ 45 55 55 55 55</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>


<?php include "includes/footer.php"; ?>
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="js/active.js"></script>

</body>
</html>
