<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html class="h-100" lang="da">

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
	<link href="css/styles.css" rel="stylesheet" type="text/css">
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css">

	<!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="h-100">
<?php include "includes/nav.php"?>


<section class="hero-background">
	<div  class="d-flex justify-content-center">
		<div class="w-50">
			<img class="image-1" src="img/water-tap-2.jpg" alt="water-tap">
		</div>
	</div>



</section>










<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<?php include "includes/footer.php"?>
</body>
</html>
