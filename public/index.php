<?php

namespace Magic\Magic;

require '../vendor/autoload.php';

$node = HtmlNode::textarea('Juan')
    ->name('content')
    ->id('contenido');

echo $node;
 