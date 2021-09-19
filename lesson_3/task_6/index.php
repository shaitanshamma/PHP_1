<?php

$year = date("Y");
$dir = "templates/";

$menu = renderTemplate("$dir" . "menu");
$content = renderTemplate($dir . "about", ["content" => "some content"]);
$footer = renderTemplate($dir . "footer", ["year" => $year]);

$args = [
    "menu" => $menu,
    "content" => $content,
    "footer" => $footer
];

echo renderTemplate($dir . "layout", $args);


function renderTemplate($page, $args = [])
{
    foreach ($args as $key => $value) {
        $$key = $value;
    }
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}
