<?php
/* Странно, но не завелись почему-то
$path = $_SERVER["DOCUMENT_ROOT"] . "\lesson_4\gallery_img";
$path2 = dirname(__DIR__) . "\lesson_4\gallery_img\small";
*/
$path = "gallery_img";
$path2 = "gallery_img\small";
include 'classSimpleImage.php';

function getImages($path)
{
    $tmpList = scandir($path);
    return array_splice($tmpList, 2);
}

$images = getImages($path2);

if (!empty($_FILES)) {
    $pathToSmall = $_SERVER["DOCUMENT_ROOT"] . "\lesson_4\gallery_img\small\\" . $_FILES['myfile']['name'];
    $pathToBig = $_SERVER["DOCUMENT_ROOT"] . "\lesson_4\gallery_img\big\\" . $_FILES['myfile']['name'];
    $uploadfile = $pathToSmall . basename($_FILES['myfile']['name']);

//Проверка существует ли файл
    if (file_exists($uploadfile)) {
        echo "Файл $uploadfile существует, выберите другое имя файла!";
        exit;
    }

//Проверка на размер файла
    if ($_FILES["myfile"]["size"] > 1024 * 2 * 1024) {
        echo("Размер файла не больше 2 мб");
        exit;
    }
//Проверка расширения файла
    $blacklist = array(".php", ".phtml", ".php3", ".php4");
    foreach ($blacklist as $item) {
        if (preg_match("/$item\$/i", $_FILES['myfile']['name'])) {
            echo "Загрузка {$item} -файлов запрещена!";
            exit;
        }
    }
//Проверка на тип файла
    $imageinfo = getimagesize($_FILES['myfile']['tmp_name']);
    if ($imageinfo['mime'] != 'image/jpeg') {
        echo "Можно загружать только jpg-файлы!";
        exit;
    }

    if (move_uploaded_file($_FILES['myfile']['tmp_name'], $pathToBig)) {
        $image = new SimpleImage();
        $image->load($pathToBig);
        $image->resizeToWidth(250);
        $image->save($pathToSmall);
        $message = "Файл загружен";
        header("Location: index.php");
        die();
    } else {
        $message = "Ошибка загрузки.";
        header("Location: /?message=error");
        die();
    }
}

$codes = [
    'ok' => 'Файл загружен',
    'error' => 'Ошибка загрузки',
];

$messageCode = strip_tags($_GET['message']);
$message = $codes[$messageCode];

?>


<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Gallery</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<div id="main">
    <div class="post_title"><h2>Моя галерея</h2></div>
    <div class="gallery">
        <?php foreach ($images as $img) : ?>
            <a class="photo" href="<?= $path . "\big\\" . $img; ?>">
                <img src="<?= $path2 . "\\" . $img ?>" width="150" height="100" alt="<?= $img ?>"/>
            </a>
        <?php endforeach; ?>
    </div>
    <form method="post" enctype="multipart/form-data">
        <input type="file" name="myfile">
        <input type="submit" value="Загрузить">
    </form>
</div>
</body>
</html>

