<?php
$price = 50; // integer
$scord = 90.8; // double

$name = "Saiyalad"; // string
$isvalid = false; // boolean

$price = $price+100; // 50+100 => price

// ການດືງຕົວປ່ຽນມາສະແດງ
echo $name."<br>";
echo $isvalid."<br>";
echo $price."<br>";
echo $scord."<br>";

echo "<hr>";

// ການດືງຕົວປ່ຽນ ແລະ ບອກປະເພດຂໍ້ມູນ
echo gettype($name)."<br>";
echo gettype($isvalid)."<br>";

echo "<hr>";
// ການກຳນົດຕົວປ່ຽນ ຫຼຶ ປ່ຽນປະເພດຂໍ້ມູນ
echo "ຫຼັງປ່ຽນ = ".gettype($scord)."<br>";

settype($scord,"integer");
echo "ຫຼັງປ່ຽນ = ".gettype($scord)."<br>";

?>