<?php
require '../vendor/autoload.php';

$loader = new \Twig\Loader\FilesystemLoader('../src/View/');
$twig = new \Twig\Environment($loader);
$products = ['banane', 'fraise', 'courgette', 'potiron', 'choufleur'];
echo $twig->render('index.html.twig', [
    'products' => $products]);



?>