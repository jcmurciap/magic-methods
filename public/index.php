<?php

namespace Magic\Magic;

require '../vendor/autoload.php';

$node = (new HtmlNode('textarea', 'Juan'))
    ->name('content');

echo $node->render();
 