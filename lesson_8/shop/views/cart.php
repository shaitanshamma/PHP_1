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
            <h2>SHOPPING CART</h2>
        </div>
    </section>
    <section class="central_cart">
        <div class="wrapper">
            <?php if ($sum['total'] != null): ?>
            <div class="products_in_cart">
                <div class="cart_items">
                    <?php foreach ($result as $prod) : ?>
                        <div class="product_in_cart">
                            <img src="<?= SRC . $prod['img'] ?>" alt="" class="product_img">
                            <div class="description">
                                <h3><?= $prod['title'] ?></h3>
                                <p class="product_decr">Price: <span>$<?= $prod['price'] ?></span></p>
                                <p class="product_decr">Color: Red</p>
                                <p class="product_decr">Size: Xl</p>
                                <label>
                                    <span class="product_decr">Quantity:</span>
                                    <input type="number" class="input_number" value="<?= $prod['quant'] ?>">
                                </label>
                                <a href="?action=delete&id=<?= $prod['id'] ?>" class="close_prd">
                                    <i class="far fa-window-close product-close"></i>
                                </a>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="cart_buttons">
                    <div class="">
                        <button class="cart_button" onclick="location.href='?action=clear' ">Clear shopping cart
                        </button>
                    </div>
                    <div class="">
                        <button class="cart_button" onclick="location.href='index.php'">Continue shopping</button>
                    </div>
                </div>
            </div>
            <div class="order_and_price">
                <form method="post" class="order_form" action="?action=order">
                    <h4>Confirm order</h4>
                    <label>
                        <input type="text" placeholder="Name" name="name">
                    </label>
                    <label>
                        <input type="number" placeholder="Phone" name="phone">
                    </label>
                    <div class="total_price">
                        <h5>SUB TOTAL $ <?= $sum['total'] ?></h5>
                        <h4>GRAND TOTAL <span>$ <?= $sum['total'] ?></span></h4>
                        <div class="proceed_button">
                            <button class="proceed" type="submit">PROCEED TO CHECKOUT</button>
                        </div>
                    </div>
                </form>
                <?php else: ?>
                    <h2 style="padding-top: 100px; color: #F16D7F">Ваша корзина пуста!</h2>
                <?php endif ?>
            </div>
    </section>
    <section class="subscribe">
        <div class="sub_block">
            <div class="img_subb"></div>
            <p>“Vestibulum quis porttitor dui! Quisque viverra nunc mi, a pulvinar purus condimentum“</p>
        </div>
        <div class="sub_form">
            <h2>SUBSCRIBE</h2>
            <h3>FOR OUR NEWLETTER AND PROMOTION</h3>
            <div class="button-fl">
                <label id="input_email">
                    <input type="email" placeholder="Enter Your Email">
                </label>
                <div class="butn">
                    <button type="button" class="sub_btn" onclick="location.href='register.html'" title="Registration">
                        Subscribe
                    </button>
                </div>
            </div>
        </div>
    </section>
    <footer>
        <?php include 'templates/footer.php' ?>
    </footer>
</div>
<script src="app.js"></script>
</body>
</html>