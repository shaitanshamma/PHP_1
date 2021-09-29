<?php
require "functions.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $arg1 = (float)$_POST['arg1'];
    $arg2 = (float)$_POST['arg2'];
    $operation = $_POST['operation'];
    $result = mathOperation($arg1, $arg2, $operation);
}
?>
<form action="" method="post">
    <input type="text" name="arg1" value="<?=$_POST['arg1']?>">
    <select name="operation" id="">
        <option value="add" <?php if ($_POST['operation']=='add') echo 'selected'; ?>>+</option>
        <option value="sub" <?php if ($_POST['operation']=='sub') echo 'selected'; ?>>-</option>
        <option value="mult" <?php if ($_POST['operation']=='mult') echo 'selected'; ?>>*</option>
        <option value="div" <?php if ($_POST['operation']=='div') echo 'selected'; ?>>/</option>
    </select>
    <input type="text" name="arg2" value="<?=$_POST['arg2']?>">
    <input type="submit" value="=">
    <input type="text" name="result" value="<?=$result?>" readonly>
</form>