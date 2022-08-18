<?php
// ແບບດຽວ
$number = [10,20,15,20,30,10,20];
// ແບບຄູ່
$room = array("A01"=>"ໄຊຍະລາດ","A02"=>"ອູອີ","A03"=>"ບຶງ");

//  ການຄົ້ນຫາ key
if(array_key_exists("A01",$room)) {
    print("ເຈີ key ທີ່ຕ້ອງການ <br>");
} else {
    print("ຄົ້ນຫາບໍ່ເຈີ <br>");
}

// ການຄົ້ນຫາ value

if (in_array("ໄຊຍະລາດ",$room)) {
    print("ເຈີ value ທີ່ຕ້ອງການ");
} else {
    print("ຄົ້ນຫາບໍ່ເຈີ");
}


?>