<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once 'ShopProduct.php';
require_once 'CDProduct.php';
require_once 'BookProduct.php';
require_once 'ShopProductWriter.php';

$product1 = new BookProduct(
    'Собаче серце',
    'Михайло',
    'Булгаков',
    101.11,
    340);
$product2 = new CDProduct(
    'Мова риб',
    'Група',
    'Скрябін',
    10.99,
    120);

echo 'Автор: '.$product1->getProducer().'<br>';
echo 'Виконавець: '.$product2->getProducer().'<br>';

$writer = new ShopProductWriter();
$writer->addProducts($product1).'<br>';
$writer->addProducts($product2).'<br>';
echo $writer->write();



var_dump($product1);
var_dump($product2);
var_dump($writer);