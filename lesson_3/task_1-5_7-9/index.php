<?php
/*1*/
$i = 0;

while ($i <= 100) {
    if ($i % 3 == 0) {
        echo "{$i} ";
    }
    $i++;
    /* Второй способ
    ($i%3==0)?print($i . " "):print("");
    $i++;
    */
}
echo "<hr>";

/*2*/

$i = 0;
do {
    if ($i == 0) {
        echo "{$i} - это ноль <br>";
    } else {
        ($i % 2 == 0) ? print("{$i} - четное число <br> ") : print("{$i} - нечетное число <br>");
    }
    $i++;
} while ($i <= 10);
echo "<hr>";

/*3*/

$regionAndCities = [
    'Московская' => [
        'Москва',
        'Коломна',
        'Клин'
    ],
    'Рязанская' => [
        'Рязань',
        'Шацк',
        'Шилово'
    ],
    'Тверская' => [
        'Ржев',
        'Торжок',
        'Конаково'
    ]
];

$str = '';

foreach ($regionAndCities as $region => $cities) {
    $str .= $region . " : <br>";
    foreach ($cities as $city) {
        $str .= $city . ", ";
    }
//    Это был первый вариант
//    $str[strlen($str) - 2] = ". <br>";

    $str = substr_replace($str, ". <br>", -2);
}
echo $str;
echo "<hr>";

function translate($str)
{
    $out = "";
    $alfabet = [
        'а' => 'a', 'б' => 'b', 'в' => 'v',
        'г' => 'g', 'д' => 'd', 'е' => 'e',
        'ё' => 'e', 'ж' => 'zh', 'з' => 'z',
        'и' => 'i', 'й' => 'y', 'к' => 'k',
        'л' => 'l', 'м' => 'm', 'н' => 'n',
        'о' => 'o', 'п' => 'p', 'р' => 'r',
        'с' => 's', 'т' => 't', 'у' => 'u',
        'ф' => 'f', 'х' => 'h', 'ц' => 'c',
        'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch',
        'ь' => '\'', 'ы' => 'y', 'ъ' => '\'',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
    ];
    $rusArr = mb_str_split($str);

    for ($i = 0; $i < count($rusArr); $i++) {
        $case = false;
        $letter = $rusArr[$i];
        $letToLower = mb_strtolower($rusArr[$i]);
        if ($letter === $letToLower) {
            $case = true;
        }
        if ($case) {
            $out .= $alfabet[$letToLower];
        } else {
            $out .= ucwords($alfabet[$letToLower]);
        }
        if ($alfabet[$letToLower] == null) {
            $out .= $letToLower;
        }
    }
    return $out;
}

echo translate('ВААап мццу цм Щ!@');
echo "<hr>";

/*7*/

function transform($str)
{
    return $out = str_replace(" ", "_", $str);
}

echo transform('ВААап мццу цм Щ!@    sdwd  wew');

echo "<hr>";

/*8*/

$str = "";

foreach ($regionAndCities as $region => $cities) {
    $str .= $region . " : <br>";
    foreach ($cities as $city) {
        if (strstr($city, "К")) {
            $str .= $city . ", ";
        }
    }
    if (mb_substr($str, -7) === " : <br>") {
        $str .= substr_replace($str, "-- <br>", 0);
    } else $str = substr_replace($str, ". <br>", -2);
}
echo $str;
echo "<hr>";

/*9*/

function translateAndTransform($string){
    return translate(transform($string));
}
echo translateAndTransform('АВВ вв вцц ццЩ!');