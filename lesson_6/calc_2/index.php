<?php
require "functions.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arg1 = (float)$_POST['arg1'];
    $arg2 = (float)$_POST['arg2'];
    $operation = $_POST['operation'];
    $result = mathOperation($arg1, $arg2, $operation);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calc</title>
</head>
<body>
<form action="" method="post" id="calc">
    <input type="button" value="1">
    <input type="button" value="2">
    <input type="button" value="3">
    <br>
    <input type="button" value="4">
    <input type="button" value="5">
    <input type="button" value="6">
    <br>
    <input type="button" value="7">
    <input type="button" value="8">
    <input type="button" value="9">
    <br>
    <input type="button" value="0">
    <input type="button" value=".">
    <input type="button" value="+" class="operations">
    <br>
    <input type="button" value="-" class="operations">
    <input type="button" value="*" class="operations">
    <input type="button" value="/" class="operations">
    <br>
    <input type="submit" value="=">
    <br>
    <input type="text" id="arg1" name="arg1" value="<?=$_POST['arg1']?>">
    <input type="text" id="operation" name="operation" value="<?=$_POST['operation']?>">
    <input type="text" id="arg2" name="arg2" value="<?=$_POST['arg2']?>">
    <h3>=</h3>
    <h3 id="result"><?= $result ?></h3>
</form>
<script>
    let form = document.querySelector('#calc');
    let arg_1 = document.querySelector('#arg1');
    let arg_2 = document.querySelector('#arg2');
    let operation = document.querySelector('#operation');
    let oper = false;
    form.addEventListener('click', function (e) {
        if (e.target.className !== 'operations' && !oper) {
            arg_1.value += e.target.value
        } else if (e.target.className === 'operations') {
            oper = true
            operation.value = e.target.value;
        } else if (e.target.className !== 'operations' && oper) {
            arg_2.value += e.target.value
        }
    })
</script>
</body>
</html>
