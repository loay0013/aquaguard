<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Shop | køb filtre fra Aquaguard </title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">
    <meta name="description" content="Når du køber filtre fra Aquaguard køber du lækkert design.
    I vores app kan du følge med i dit vandforbrug, så du kan spare penge på dine vandregninger.">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <link rel='icon' href='img/aquaguard_logo_skjold.svg' type='image/x-icon' sizes="40x40" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!--navbar-->
<?php include "includes/nav.php"?>

<h1 class="text-center p-5">
    Shop
</h1>
<!--container til produkter-->
<div class="container col-md-6 w-md-50 rounded-2">
    <div class=" w-md-50 container">
        <div class="produkters">
            <div class="items">
            </div>
        </div>
    </div>
</div>

<!--footer-->
<?php include "includes/footer.php"?>
<!--bootstrap js script-->
<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!--navbar active-->
<script src="js/active.js"></script>
<!--script import fra js-->
<script type="module">
    import produkters from "./js/produkter.js";
    const produkter = new produkters();
    produkter.init();
</script>

</body>
</html>
