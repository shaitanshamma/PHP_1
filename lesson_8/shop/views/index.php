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
    <title>Best Shop!</title>
</head>
<body>
<div class="container">
    <header>
        <?php include 'templates/header.php'?>
    </header>
    <section class="cart_top">
        <div class="wrapper">
            <h2>CATALOG</h2>
        </div>
    </section>
    <section class="feature_content">
        <?php foreach ($result as $prod) : ?>
            <div class="fature_item">
                <div class="overlay">
                    <a href="?action=buy&id=<?=$prod['id'] ?>">
                        <div class="add_to_card_block">
                            <img src="img/cart.png" alt="">
                            <p>Add to Cart</p>
                        </div>
                    </a>
                </div>
                <a href="product.php?id=<?= $prod['id'] ?>">
                    <img src="<?= SRC . $prod['img'] ?>" alt="">
                    <h3><?= $prod['title'] ?></h3>
                    <p class="pgf"><?= $prod['description'] ?></p>
                    <p class="price"><?= $prod['price'] ?> $ </p>
                </a>
            </div>
        <?php endforeach; ?>
    </section>
    <footer>
        <?php include 'templates/footer.php'?>
    </footer>
</div>
</body>
</html>
