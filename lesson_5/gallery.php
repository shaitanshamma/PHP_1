<?php
include "db.php";

$id = (int)$_GET['id'];

$addLike = mysqli_query($db, "UPDATE images SET `like`=`like` + 1 WHERE id ={$id}");

var_dump($id);

$images = mysqli_query($db, "SELECT * FROM images WHERE id ={$id}");

$img = ($images) ? mysqli_fetch_assoc($images) : null;

define("PATH", 'gallery_img/big/');

$src = PATH . $img['name'];
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
</head>
<body>
<?php if ($img !=null):?>
<img src="<?= $src ?>" alt="<?= $img['name'] ?>">
<h3>Likes = <?= $img['like'] ?></h3>
<?php else: ?>
<h2>Нет такого изображения!</h2>
<?php endif;?>
<br>
<br>
<h3><a href="index.php">Назад</a></h3>
</body>
</html>
