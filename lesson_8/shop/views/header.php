<div class="nav__menu">
    <div class="nav_left">
        <div class="logo"><a href="index.php"><img src="img/Group%202.svg" alt="" class="img_header"></a></div>
        <div class="logo_2">
            <input type="checkbox" id="search">
            <label for="search">
                <img src="img/Forma%201.svg" alt="" class="img_header">
            </label>
            <form class="search">
                <label>
                    <input type="text" placeholder="Search" class="search_field">
                </label>
                <button type="submit" class="search_btn">Search</button>
            </form>
        </div>
    </div>
    <div class="nav">
        <div class="nav_menu">
            <button class="open__overlay" id="open__overlay">
                <i class="fas fa-bars"></i>
            </button>
            <?php if ($allow): ?>
                <div class="nav_button login__icon"><a href="?logout"><i class="fas fa-sign-out-alt"></i></a>
                </div>
            <?php else: ?>
                <div class="login__icon"><a href="login.php"><i class="fas fa-sign-in-alt"></i></a></div>
            <?php endif; ?>
            <?php if ($login==='admin'): ?>
                <div style="color: #F16D7F; font-size: 20px;"><a href="admin.php">Admin</a></div>
            <?php endif; ?>
            <div class="nav_button basket"><a href="cart.php"><img src="img/Forma_3.png" alt=""
                                                                   class="img_header"></a>
                <?php foreach ($cart_quant as $quant): ?>
                    <?php if ($quant['quant'] != 0): ?>
                        <p class="basket__count" id="basket__count"><?= $quant['quant'] ?></p>
                    <?php endif; ?>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
