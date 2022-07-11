<?php 

include 'lerndb.php';

$getProducts = "SELECT * FROM products WHERE category_id = 1";

$database = new lerndb('localhost', 'my_shop', 'postgres', 'admin');

$database->query($getProducts);

echo '<hr>';
 
echo '<br>' . 'lern git hub';

function infoDate($a, $b) {
    return strcmp(strtolower($a), strtolower($b));
}

$numArr = ["j" =>"MVC", "m" =>"OOP", "s" =>"SOLID"];

$result = uasort($numArr, "infoDate");

echo '<br>' . $result;

?>

