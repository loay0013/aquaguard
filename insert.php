<?php
require "settings/init.php";
if(!empty($_POST["data"])) {
    $data = $_POST["data"];
    $file = $_FILES;
    if (!empty($file["prodImg"]["tmp_name"])) {
        move_uploaded_file($file["prodImg"]["tmp_name"], "uploads/" . basename($file["prodImg"]["name"]));
    }

    $sql = "INSERT INTO produkter (prodNavn, prodPris, prodBas, prodImg) values(:prodNavn, :prodPris, :prodBas, :prodImg)";
    $bind = [":prodNavn" => $data["prodNavn"], ":prodPris" => $data["prodPris"], ":prodBas" => $data["prodBas"], ":prodImg"=>(!empty($file["prodImg"]["tmp_name"]))? $file["prodImg"]["name"] :NULL];
    $db->sql($sql, $bind, false);

    echo "<body style='font-size: 2rem; background-color: ;'></body>

       <p style='color: white; text-align: center; margin-top: 20%; font-family: Raleway, sans-serif;'>Produkt er nu indsat I vores system<p/>
       <div style='display: flex; justify-content: center;'>
       <a style='text-decoration: none' href='shop.php'>
       <button style='font-size: 16px; font-weight: 500; color: #1e2125 cursor: pointer; display:flex; border: none; border-radius: 20px; font-family: Raleway, sans-serif; justify-content:center; padding: 10px; height: 60px; width: 200px; background-color: #F2B705FF; align-items: center'>Gå til oversigt</button></a>
       </div>
       ";
    exit;
}
?>






<!-- Instruktion til webbrowser om at vi kører HTML5 -->
<!DOCTYPE html>

<!-- html starter og slutter hele dokumentet / lang=da: Fortæller siden er på dansk -->
<html lang="da">

<!-- I <head> har man opsætning - det ser brugeren ikke, men det fortæller noget om siden -->
<head>
    <!-- Sætter tegnsætning til utf-8 som bl.a. tillader danske bogstaver -->
    <meta charset="utf-8">

    <!-- Titel som ses oppe i browserens tab mv. -->
    <title>indsat produkt</title>

    <!-- Metatags der fortæller at søgemaskiner er velkomne, hvem der udgiver siden og copyright information -->
    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <!-- Sikrer man kan benytte CSS ved at tilkoble en CSS fil -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <!-- Sikrer den vises korrekt på mobil, tablet mv. ved at tage ift. skærmstørrelse - bliver brugt til responsive websider -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://cdn.tiny.cloud/1/jkzu8jwwcqe5jhv6qvqojegkrhyjq59kgtts7g0966ka00ix/tinymce/6/tinymce.min.js" referrerpolicy="origin">

    </script>

</head>

<!-- i <body> har man alt indhold på siden som brugeren kan se -->
<body class="bg-kurv">

    <form method="post" action="insert.php" enctype="multipart/form-data">

        <div class="row justify-content-center m-0">
            <div class="col-12 col-md-5">
                <div class="form-group m-2">
                    <label for="produkt Navn"><p class="m-0">produkt Navn</p></label>
                    <input class="form-control border-0 rounded-0" type="text" name="data[prodNavn]"  id="prodNavn" placeholder="prodNavn" value="">
                </div>
            </div>

            <div class="col-12 col-md-5">
                <div class="form-group m-2">
                    <label for="produkt Pris"><p class="m-0">produkt Pris</p></label>
                    <input class="form-control border-0 rounded-0" type="number" name="data[prodPris]"  id="prodPris" placeholder="prodPris" value="">
                </div>
            </div>


            <div class="col-12 col-md-10">
                <div class="form-group m-2">
                    <label for="prodImg"> <p class=" m-0">Img</p></label>
                    <input class="form-control border-0 rounded-0" type="file" name="prodImg"  id="prodImg" placeholder="Img" value="">
                </div>
            </div>




            <div class="col-12">
                <div class="form-group m-2">
                    <label for="produkt resume"> <p class="m-0"> produkt resume</p></label>
                    <textarea class="form-control " type="text" name="data[prodBas]"  id="prodBas" ></textarea>
                </div>
            </div>


            <div class="col-12 col-md-6 mt-5  mb-5">
                <div class="d-flex justify-content-center">
                    <button class="form-control btn btn-primary bg-gradient rounded-0 border-0 " type="submit" id="btnsubmit">Submit</button></div>
            </div>

        </div>

    </form>

    <script>
        tinymce.init({
            selector: 'textarea',
        });
    </script>

</body>
</html>
