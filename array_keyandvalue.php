<?php
// ແບບດຽວ
    $number = [10,20,15,20,30,10,20];
    // ແບບຄູ່
$room = array("A01"=>"ໄຊຍະລາດ","A02"=>"ອູອີ","A03"=>"ທິບ");

$room_keys = array_keys($room);// ເອົາແຕ່ສະເພາະຄີ (key)
print_r($room_keys);
print("<br>");

$room_value = array_values($room); // ເປັນການແຕ່ສະເພາະ value
print_r($room_value);
print("<br>");


$flip = array_flip($room); // ເປັນການສະລັບ index ເປັນ value ແລະ value ເປັນ index
print_r($flip);
print("<br>");

// ເປັນການລົບ ຂໍ້ມູນທີ່ຢູ່ໃນ array ທີ່ມັນຊ້ຳກັນ ຫຼຶ ກອງຕົວທີ່ມັນຊ້ຳກັນ ອອກໄປ ແລ້ວເອົາມາແຄ່ຄ່າດຽວ
print_r($number); // ຄ່າທີ່ຍັງບໍ່ໄດ້ໃຊ້ການ unique
print("<br>");
$unique = array_unique($number);
print_r($unique);
print("<br>");
?>