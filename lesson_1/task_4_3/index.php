<?php

$content = file_get_contents("assets/template.tmp");

$content = str_replace("{{ title }}", "Имя страницы", $content);

$content = str_replace("{{ h1 }}", "Заголовок", $content);

$content = str_replace("{{ year }}", date("Y"), $content);

echo $content;