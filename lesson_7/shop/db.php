<?php
function getDb()
{
    return mysqli_connect('localhost:3306', 'root', '12345', 'store');
}

function checkProductInCart($id, $session_uid, $db)
{
    $query = "select products.id, img, title, price, `description`, session_uid, quant 
from products 
join cart 
on products.id = cart.prod_id 
where cart.session_uid = '{$session_uid}' and products.id = '{$id}' ";
    $result = mysqli_query($db, $query);
    $prod = mysqli_fetch_assoc($result);
    if ($prod  == null) {
        mysqli_query($db, "INSERT INTO `cart` (`session_uid`, `prod_id`) VALUES ('{$session_uid}','{$id}')");
    }else  {
        $prod['quant'] = (int)$prod['quant'] + 1;
        mysqli_query($db, "UPDATE `cart` SET quant = '{$prod['quant']}' where session_uid = '{$session_uid}' and prod_id = '{$prod['id']}';");
    }
}