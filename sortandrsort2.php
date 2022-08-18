<?php
    // array ແບບຄູ່
    $arr =["A"=>20,"B"=>15,"C"=>30,"D"=>25];
    $country = ["LAO"=>"ລາວ","TH"=>"ໄທ","JP"=>"ຍີປຸ່ນ","US"=>"ສະຫາລັດ"];

    //ລຽງຂໍ້ມູນ 
    print_r($arr);
    print("<br>");
    // ແບບ ໜ້ອຍ ຫາ ຫຼາຍ
    asort($arr);
    print_r($arr);
    print("<br>");
    // ແບບ ຫຼາຍ ຫາ ໜ້ອຍ
    arsort($arr);
    print_r($arr);
    print("<br>");

    print("<hr>");

    //ລຽງ index ສິ່ງທີ່ຢູ່ໃນ [ ]

    print_r($arr);
    print("<br>");
    // ແບບ ໜ້ອຍ ຫາ ຫຼາຍ
    ksort($arr);
    print_r($arr);
    print("<br>");
        // ແບບ ຫຼາຍ ຫາ ໜ້ອຍ
        krsort($arr);
        print_r($arr);
        print("<br>");


?>