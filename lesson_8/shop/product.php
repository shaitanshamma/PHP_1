<?php
session_start();
include 'db.php';
include 'auth.php';
$id = (int)$_GET['id'];
$productEntity = mysqli_query($db, "SELECT * FROM products where products.id = {$id}");
$feedbacks = mysqli_query($db, "SELECT * FROM comments where product_id = {$id}");
$product = ($productEntity) ? mysqli_fetch_assoc($productEntity) : null;
define('SRC', 'img/');
$session_uid = session_id();
if ($_GET['action'] == 'buy') {
    $id = (int)$_GET['id'];
    checkProductInCart($id, $session_uid, $db);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}
include 'views/product.php';
