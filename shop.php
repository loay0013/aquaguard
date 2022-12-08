<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="utf-8">

    <title>Shop</title>

    <meta name="robots" content="All">
    <meta name="author" content="Udgiver">
    <meta name="copyright" content="Information om copyright">

    <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<h1 class="text-center p-5">
    Shop
</h1>
<div class="container w-md-50 rounded-2 bg-rabatkode shadow">
    <div class=" w-md-50 container">
        <div class="coupons">
            <div class="items">
            </div>
        </div>

        <div class="pt-3 d-flex justify-content-center p-md-5 ">
            <div class="d-flex justify-content-center m-2">
                <a href="api-page.php">
                    <button class="border-0 bg-btn1 rounded-2 text-light p-2 px-md-4">Tilbage</button>
                </a>
            </div>
            <div class="d-flex justify-content-center m-2">
                <a href="insert.php">
                    <button class="border-0 bg-btn2 rounded-2 text-light p-2 px-md-4">Opret rabatkode</button>
                </a>
            </div>
        </div>
    </div>
</div>


<script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>

<script type="module">
    import produkters from "./js/produkter.js";
    const produkter = new produkters();
    produkter.init();
</script>

</body>
</html>
