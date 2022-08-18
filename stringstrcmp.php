<?php
$str1 = "saiyalad";
$str2 = "SAIyalad";

// ການໃຊ້ strcmp
$result = strcmp($str1,$str2);

echo $result;

if ($result != 0){
    echo "ທັ່ງສອງບໍ່ເປັນຕົວພິມໃຫຍ່ຄືກັນ<br>";
} else{
    echo "ທັ້ງສອງເປັນຕົວພິມໃຫຍ່ຄືກັນກັນ<br>";
}

//ການໃຊ້ strcasecmp
$result1 = strcasecmp($str1,$str2);

echo $result1;

if ($result1 != 0){
    echo "ທັ່ງສອງບໍ່ເປັນຕົວພິມໃຫຍ່ຄືກັນ<br>";
} else{
    echo "ທັ້ງສອງເປັນຕົວພິມໃຫຍ່ຄືກັນກັນ<br>";
}

// ການໃຊ້ strspn

$resul2 = strspn($str1,$str2);

echo "ຈຳນວນທີ່ພົບ" . $resul2 . "<br>";

// ການໃຊ້ strcspn

$resul3 = strcspn($str1,$str2);

echo "ຈຳນວນທີ່ບໍ່ພົບ" . $resul3 . "<br>";


// ການຊອກຫາຄວາມຍາວຂອງຂໍ້ຄວາມໃນ str1 ຈະນັບຊອງວ່າງນຳ

$count = strlen($str1);

echo "ຄວາມຍາວຂອງຂໍ້ຄວາມ" . $count;
?>