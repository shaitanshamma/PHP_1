<?php
session_start();
include 'db.php';
include 'auth.php';
if (isAdmin($_SESSION['login'])) {

    $result = mysqli_query($db, "SELECT * FROM products;");
    define('SRC', 'img/');
    $session_uid = session_id();

//    $total = "select sum(quant * price) as total from cart join products on products.id = cart.prod_id join orders on orders.session_uid = cart.session_uid; ";
//    $totalRes = mysqli_query($db, $total);
//    $sum = mysqli_fetch_assoc($totalRes);

if ($_GET['action'] == 'delete') {
    $id = (int)$_GET['id'];
    $query = "DELETE FROM orders WHERE id = '{$id}';";
    mysqli_query($db, $query);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}
    $orders = mysqli_query($db, "SELECT * FROM orders;");
    include "views/admin.php";
} else {
//    echo 'Not admin';
    header('Location: index.php');
    die();
}
