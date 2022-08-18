<?php
$str1 = "  saiyalad";

echo $str1;
echo "<hr>";
$count = strlen($str1); // ບອກຄວາມຍາວຂໍ້ຄວາມ

echo "ຄວາມຍາວຂອງຂໍ້ຄວາມທີ່ຍັງບໍ່ໄດ້ຕັດຊວງວ່າງອອກ" . $count;
echo "<hr>";


// ການໃຊ້ trim
$result = trim($str1);// ການຕັດຊອງວ່າງ ຊາຍ-ຂວາ
echo "ຄວາມຍາວຂອງຂໍ້ຄວາມຕັດຊາຍຂວາ" . $result . "<br>";
$count1 =  strlen($result); // ບອກຄວາມຍາວຂໍ້ຄວາມ

echo "ຄວາມຍາວຂອງຂໍ້ຄວາມ" . $count1;
echo "<hr>";

// ການນຳໃຊ້  ltrim
$result = ltrim($str1);// ການຕັດຊອງວ່າງຊາຍ
echo "ຄວາມຂໍ້ຄວາມຊວງວ່າງຂອງຂໍ້ຄວາມທາງຊາຍ" . $result . "<br>";
$count1 =  strlen($result); // ບອກຄວາມຍາວຂໍ້ຄວາມ

echo "ຄວາມຂອງຂໍ້ຄວາມຊວງວ່າງ" . $count1;
echo "<br>";

// ການນຳໃຊ້ rtrim
$result = rtrim($str1); // ການຕັດຊວງວ່າງຂວາ
echo "ຄວາມຍາວຂອງຂໍ້ຄວາມຕັດຂວາມຶ" . $result . "<br>";
$count1 =  strlen($result); // ບອກຄວາມຍາວຂໍ້ຄວາມ

echo "ຄວາມຍາວຂອງຂໍ້ຄວາມ" . $count1;
echo "<br>";

?>