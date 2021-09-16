<?php

$year = date("Y");
$dir = "templates/";

echo renderTemplate($dir . "layout", renderTemplate("$dir" . "menu"));
echo renderTemplate($dir . "about", "some content");
echo renderTemplate($dir . "footer", $year);


function renderTemplate($page, $content = "")
{
    ob_start();
    include $page . ".php";
    return ob_get_clean();
}
