<?php
//session_start();
//include 'db.php';
//include 'auth.php';
//global $db;
$session_uid = session_id();
$query = "SELECT COUNT(id) as quant FROM cart where session_uid = '$session_uid'";
$cart_quant = mysqli_query($db, $query);
include 'views/header.php';
