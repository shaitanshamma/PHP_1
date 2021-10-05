<?php
session_start();
$allow = false;

if (isset($_GET['logout'])) {
    // setcookie('login', '', time() - 3600, '/');
    session_destroy();
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
    if ($login == 'admin' && $pass == '123') {
        // setcookie('login', md5($login), time() + 3600, '/');
        $_SESSION['login'] = $login;
        var_dump($login);
        die();
        header('Location: ' . $_SERVER['HTTP_REFERER']);
        die();
    }
}
