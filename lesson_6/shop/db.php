<?php

$db = @mysqli_connect('localhost:3306', 'root', '12345', 'store') or die("Ошибка соединения: " . mysqli_connect_error());