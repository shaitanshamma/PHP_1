<?php
session_start();
include 'db.php';
include 'auth.php';
$session_uid = session_id();
$query = "select products.id, img, title, price, `description`, session_uid, quant 
from products 
join cart 
on products.id = cart.prod_id 
where cart.session_uid = '{$session_uid}'";
$result = mysqli_query($db, $query);
$total = "select sum(quant * price) as total from cart join products on products.id = cart.prod_id where session_uid ='{$session_uid}'; ";
$totalRes = mysqli_query($db, $total);
$sum = mysqli_fetch_assoc($totalRes);
define('SRC', 'img/');

if ($_GET['action'] == 'delete') {
    $id = (int)$_GET['id'];
    mysqli_query($db, "DELETE FROM `cart` WHERE prod_id = '{$id}' and session_uid ='{$session_uid}'");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
} else if ($_GET['action'] == 'clear') {
    mysqli_query($db, "DELETE FROM `cart` WHERE session_uid = '{$session_uid}'");
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}
if ($_GET['action'] == 'order') {
    $name = htmlspecialchars(strip_tags(mysqli_real_escape_string($db, $_POST['name'])));
    $phone = htmlspecialchars(strip_tags(mysqli_real_escape_string($db, $_POST['phone'])));
    $sql = "INSERT INTO `orders`(`name`, `phone`, `session_uid`) VALUES ('{$name}','{$phone}','{$session_uid}')";
    session_regenerate_id();
    mysqli_query($db, $sql);
    $_SESSION['message'] = "Заказ успешно оформлен";
    header("Location: cart.php");
    die();
}
include 'views/cart.php';
