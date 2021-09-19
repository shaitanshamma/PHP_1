<?php

$list = [
    "О нас" => ["href" => "5",
        "color" => "red"
    ],
    "Главная" => ["href" => "2",
        "color" => "red"]
]; ?>

<ul>
    <?php foreach ($list as $item => $keys): ?>
        <li>
            <?php foreach ($keys as $key => $value): $$key = $value ?>
            <?php endforeach; ?>
            <a href="<?= $href ?>" style="color: <?= $color ?>;"><?= $item ?></a>
        </li>
    <?php endforeach; ?>
</ul>
