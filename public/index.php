<?php

namespace Magic\Magic;

require '../vendor/autoload.php';

$node = HtmlNode::textarea('Juan')
    ->name('content')
    ->id('contenido');

var_dump($node('id'), $node('div'));
exit();

