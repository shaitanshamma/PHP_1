<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700;900&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/2f9a841967.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>Cart</title>
</head>
<body>
<div class="container">
    <header>
        <?php include 'templates/header.php' ?>
    </header>
    <section class="cart_top">
        <div class="wrapper">
            <h2>Admin page</h2>
        </div>
    </section>
    <div class="product_in_cart">
        <?php foreach ($orders as $order) : ?>
            <div class="description">
                <h3><?= $order['name'] ?></h3>
                <h3><?= $order['phone'] ?></h3>
                <h3><?= $order['date'] ?></h3>
                <h5>TOTAL $ <?= $sum['total'] ?></h5>
                <a href="?action=delete&id=<?= $order['id'] ?>" class="close_prd">
                    <i class="far fa-window-close product-close"></i>
                </a>
            </div>
        <?php endforeach; ?>
        <?php foreach ($totalRes as $sum) : ?>
            <div class="product_in_cart">
                <div class="description">
                    <h5>TOTAL $ <?= $sum['total'] ?></h5>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <footer>
        <?php include 'templates/footer.php' ?>
    </footer>
</div>
<script src="app.js"></script>
</body>
</html>
