<?php
    $arr1 = ["product"=>"ໂຕະ","collor"=>"ສີສົ້ມ","price"=>500];

    $arr2 = ["discount"=>100,"delivery"=>30,"price"=>2000];

    // ເປັນການເອົາອາເລ ທັງສອງມາລວ່ມກັນ ຖ້າເຈີ key ທີ່ຊ້ຳກັນມັນຈະເອົາ key ຕົວທີ່ສອງແທນທີ່ ຕົວທີ່ 1
    $result = array_merge($arr1,$arr2);
    print_r($result);
    print("<br>");

    //ເປັນການເອົາອາເລ ທັງສອງມາລວ່ມກັນ ຖ້າມີ key ທີ່ຊ້ຳກັນ ຈະເອົາມາຕໍ່ທ້າຍບ່ອນທີ່ມັນຊ້ຳກັນ ແລ້ວຈະແລ້ວເອົາຈັດຢູ່ກູ່ມດຽວກັນ ຈະບໍ່ແທນທີ່ຄືກັບແບບທີ່ໜຶງ
    $result2 = array_merge_recursive($arr1,$arr2);
    print_r($result2);
    print("<br>");


    // ການສ້າງເອລາ ດຽວ ສອງອັນໃຫ້ເປັນ ອາເລ ແບບ ຄູ່
    $array1 = ["dog","cat","pig","ant"];
    $array2 = ["ໜາ","ແມວ","ໝູ","ມົດ"];
    $room = array_combine($array1,$array2); //ຕົວທີ່ 1 ຈະເປັນ key ຕົວທີ່ 2 ຈະເປັນ value
    print_r($room);
    print("<br>");
?>