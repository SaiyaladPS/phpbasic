<?php
$number = 100.34;


echo $number;
echo "<br>";

// ການນຳໃຊ້ ceil
$result = ceil($number);
echo $result . "<br>";

// ການນຳໃຊ້ floor
$result = floor($number);
echo $result . "<br>";
// ການນຳໃຊ້ round
$result = round($number);// ຖ້າວ່າ .5 ຂື້ນໄປໃຫ້ເພິມຂື້ນເຕັມ ຖ້າໜ້ອຍກວ່າໃຫ້ລົງເປັນຈຳນວນເຕັມ
echo $result . "<br>";
?>