<?php
include 'shopproduct.php';

//$a = new shopproduct();


$product1 = new ShopProduct("My Antonia", "Willa", "Cather", 5.99);


$writer = new ShopProductWriter();
$writer->write($product1);
?>
