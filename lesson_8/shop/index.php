<?php
session_start();
include 'db.php';
include 'auth.php';
$result = mysqli_query($db, "SELECT * FROM products;");
define('SRC', 'img/');
$session_uid = session_id();

if ($_GET['action'] == 'buy') {
    $id = (int)$_GET['id'];
    checkProductInCart($id, $session_uid, $db);
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}
include 'views/index.php';

