<?php
$price = 100.17;
$dalivery = 50.99;

$total = $price + $dalivery;

echo "ກ່ອນແປງ = ". gettype($total)."<br>";
echo $total . "<br>";

// type casting
$total = (integer)$total;
echo "ຫຼັງແປງ = " . gettype($total)."<br>";
echo $total . "<br>";
?>