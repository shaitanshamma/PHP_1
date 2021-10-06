<?php
//
//$allow = false;
//
//if (isset($_GET['logout'])) {
//    session_regenerate_id();
//    session_destroy();
//    setcookie("hash", "", time() - 3600, '/');
//    header("Location: /");
//}
//
//if (is_auth()) {
//    $allow = true;
//    $user = get_user();
//}
//
//if (isset($_POST['ok'])) {
//    $login = $_POST['login'];
//    $pass = $_POST['pass'];
//    if (!auth($login, $pass)) {
//        die('Не верный логин пароль');
//    }
//    $allow = true;
//    $user = get_user();
//}
//
//function auth($login, $pass)
//{
//    global $db;
//    $login = mysqli_real_escape_string($db, strip_tags(stripslashes($login)));
//    $result = mysqli_query($db, "SELECT * FROM users JOIN roles ON users.role = roles.id  WHERE login = '{$login}'");
//    $row = mysqli_fetch_assoc($result);
//    var_dump($row["role"]);
//    die();
//
//    if (password_verify($pass, $row['password'])) {
//        $_SESSION['login'] = $login;
//        $_SESSION['id'] = $row['id'];
//        return true;
//    }
//    return false;
//}
//
//function is_auth()
//{
//    global $db;
//    if (isset($_COOKIE["hash"])) {
//        $hash = $_COOKIE["hash"];
//        $sql = "SELECT * FROM `users` WHERE `hash`='{$hash}'";
//        $result = mysqli_query($db, $sql);
//        $row = mysqli_fetch_assoc($result);
//        $user = $row['login'];
//        if (!empty($user)) {
//            $_SESSION['login'] = $user;
//        }
//    }
//    return isset($_SESSION['login']);
//}
//
//function is_admin()
//{
//    return $_SESSION['login'] == 'admin';
//}
//
//function get_user()
//{
//    return $_SESSION['login'];
//}
include 'db.php';
include 'auth.php';

include 'views/login.php';


