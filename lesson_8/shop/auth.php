<?php

include 'db.php';

session_start();
$allow = false;

function checkProductInCart($id, $session_uid, $db)
{
    $query = "select products.id, img, title, price, `description`, session_uid, quant
from products
join cart
on products.id = cart.prod_id
where cart.session_uid = '{$session_uid}' and products.id = '{$id}' ";
    $result = mysqli_query($db, $query);
    $prod = mysqli_fetch_assoc($result);
    if ($prod == null) {
        mysqli_query($db, "INSERT INTO `cart` (`session_uid`, `prod_id`) VALUES ('{$session_uid}','{$id}')");
    } else {
        $prod['quant'] = (int)$prod['quant'] + 1;
        mysqli_query($db, "UPDATE `cart` SET quant = '{$prod['quant']}' where session_uid = '{$session_uid}' and prod_id = '{$prod['id']}';");
    }
}

if (isset($_GET['logout'])) {
    // setcookie('login', '', time() - 3600, '/');
    session_destroy();
    session_regenerate_id();
    header('Location: ' . $_SERVER['HTTP_REFERER']);
    die();
}

if (isset($_SESSION['login'])) {
    $allow = true;
    $login = $_SESSION['login'];
}

if (isset($_POST['ok'])) {
    $login = strip_tags($_POST['login']);
    $pass = strip_tags($_POST['pass']);
    $result = mysqli_query($db, "SELECT login, password, roles.title FROM users JOIN roles ON users.role = roles.id  WHERE login = '{$login}'");
    $row = mysqli_fetch_assoc($result);
    if (password_verify($pass, $row['password'])) {
        $_SESSION['login'] = $login;
        $_SESSION['id'] = $row['id'];
        if (isAdmin($_SESSION['login'])){
            header('Location: admin.php');
            die();
        }
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }
}

function isAdmin($login){
    if($login ==='admin'){
        return true;
    }
    return false;
}