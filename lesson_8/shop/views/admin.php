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
    <table class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Phone</th>
            <th>Date</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        <?php foreach ($orders as $order) : ?>
            <tr>
                <td><?= $order['id'] ?></td>
                <td><?= $order['name'] ?></td>
                <td><?= $order['phone'] ?></td>
                <td><?= $order['date'] ?></td>
                <td><?= $order['total'] ?></td>
                <td><a href="?action=delete&id=<?= $order['id'] ?>" style="color: red">
                        DELETE
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <footer>
        <?php include 'templates/footer.php' ?>
    </footer>
</div>
<script src="app.js"></script>
</body>
</html>
