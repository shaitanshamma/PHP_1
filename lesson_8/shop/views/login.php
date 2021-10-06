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
    <title>Best Shop!</title>
</head>
<body>
<div class="container">
    <header>
        <?php include 'templates/header.php' ?>
    </header>
    <div class="order_and_price">
        <?php if ($allow): ?>
            <h4><a href="index.php">Вперед шопится!</a></h4>
        <?php else: ?>
            <form class="order_form" method="post">
                <h4>Enter to you profile</h4>
                <label>
                    <input type="text" placeholder="Login" name="login">
                </label>
                <label>
                    <input type="password" placeholder="Password" name="pass">
                </label>
                <div class="">
                    <button class="get_quote" type="submit" name="ok">SUBMIT</button>
                </div>
            </form>
        <?php endif; ?>
    </div>
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
        <?php include 'templates/footer.php'?>
    </footer>
</div>
</body>
</html>
