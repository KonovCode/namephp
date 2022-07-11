<?php 

include 'lerndb.php';

$getProducts = "SELECT * FROM products WHERE category_id = 1";

$database = new lerndb('localhost', 'my_shop', 'postgres', 'admin');

$database->query($getProducts);

echo 'lern git hub';
?>

