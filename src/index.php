<?php

require '../vendor/autoload.php';

use RedBeanPHP\R;

R::setup('mysql:host=localhost;dbname=redbean-test', 'root', '');

//dispense est une méthode
$product = R::dispense('product');
R::
$product->name = "Gutare électrique";
$product->price = 500;
$product->inStock = 42;

try {
    $insertId = R::store($product);
} catch (SQL $e) {
    "Une erreur en base de donnée s'est produite";
}