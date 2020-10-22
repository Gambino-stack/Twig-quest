<?php

require "../vendor/autoload.php";

//require '../src/views/index.html.twig';

$loader = new Twig\Loader\FilesystemLoader(__DIR__.'/../src/views');
$twig = new Twig\Environment($loader, [
    'cache'=> 'false'
]);


$products = ['orange', 'banana', 'lemon', 'strawberry', 'apple'];


echo $twig->render('index.html.twig', ['products' => $products]);








