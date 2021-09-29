<?php
include 'db.php';
$result = mysqli_query($db,"SELECT * FROM products;");
define('SRC', 'img/');
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Shop</title>
</head>
<body>
<section class="feature_content">
    <?php foreach ($result as $prod) : ?>
    <div class="fature_item">
        <div class="overlay">
            <a href="cart.html">
                <div class="add_to_card_block">
                    <img src="img/cart.png" alt="">
                    <p>Add to Cart</p>
                </div>
            </a>
        </div>
        <a href="product.php?id=<?=$prod['id']?>">
            <img src="<?=SRC . $prod['img'] ?>" alt="">
            <h3><?=$prod['title']?></h3>
            <p class="pgf"><?=$prod['description']?></p>
            <p class="price"><?=$prod['price']?> $ </p>
        </a>
    </div>
    <?php endforeach; ?>
</section>
</body>
</html>
