<?php

use App\NavChain;

require $_SERVER['DOCUMENT_ROOT'] . '\vendor\autoload.php';

$nav = new NavChain();
$nav->addList([
    ['Home', '/'],
    ['Category', '/category'],
    ['Blog', '/category/blog'],
]);
?>
<nav aria-label="Breadcrumb" class="breadcrumb">
    <ul>
        <?php foreach ($nav->getAll() as $item): ?>
            <li><a href="<?= $item['url'] ?>"><?= $item['name'] ?></a></li>
        <?php endforeach; ?>
    </ul>
</nav>

