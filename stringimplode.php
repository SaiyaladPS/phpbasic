<?php


// ການນຳໃຊ້ implode
$arr = array("Helo","World","I","Love","PHP");
$str = implode("-",$arr);// ຮ່ວມ string ໂດຍແຍກຂໍ້ຄວາມໂດຍ -  ໃຊ້ join ແທ່ນ implode ກໍຄືກັນ (ແປງອາເລເປັນສະຕິງ)
echo $str . "<br>";

// ການນຳໃຊ້ explode
$str1 = "Saiyalad:19:laos";
$arr1 = explode(":",$str1); // ເປັນການນຳເອົາ string ມາເປັນ array ມີສັນຍາລັກ : ມາເປັນຕົວແບ່ງ

print_r($arr1);
echo "ຊື່: " . $arr1[0];
print("<br>");

// ການນຳໃຊ້ substr
$txt = "saiyalad";

echo $txt[0] . "<br>"; // ເປັນການເລືອກກຸ່ມສະເພາະຕົວອັກສອນທີ່ຢູ່ໃນ String
echo substr($txt,3) . "<br>"; //ເປັນການສັ່ງຕັດຕັ້ງແຕ່ຕົວທີ່ 1 ຮອດ 3 ໄທແລ້ວໃຫ້ເອົົາມາສະແດງ
echo substr($txt,3,3) . "<br>"; //ເປັນການສັ່ງຕັດຕັ້ງແຕ່ຕົວທີ່ 3 ແລ້ວ  ສະແດງ 3 ຕົວແລ້ວໃຫ້ເອົົາມາສະແດງ

// ການນຳໃຊ້ str_split
$txt2 = "saiyaladps";
$arr2 = str_split($txt2,4); // ຕ້ອງການແບ່ງ ຢ່າງລະ 4 ຕົວອັກສອນ
print_r($arr2);
?>