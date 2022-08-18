<?php
    $fruits = ["ໜາກແຕ່ງ","ໜາກນາວ","ສີດາ","ມັງກອນ","ໜາກລຳໄຍ","ໜາກລິນຈີ","ໜາກຂາມ"];

    print_r($fruits);
    print("<br>");
    // ການເພິ່ມຕໍ່ທ້າຍ ຂອງ ອາເລ
    array_push($fruits,"ໜາກມວ່ງ");
    print_r($fruits);
    print("<br>");

    // ການລົບຕົວທ້າຍສຸດ
    array_pop($fruits);
    print_r($fruits);
    print("<br>");
    // ການສອງເທືອ
    array_pop($fruits);
    print_r($fruits);
    print("<br>");

    // ການເພິ່ມໄວ້ທາງໜ້າ
    array_unshift($fruits,"ໜາກເກາະ");
    print_r($fruits);
    print("<br>");

    // ການລົບຕົວທາງໜ້າສຸດ
    array_shift($fruits);
    print_r($fruits);
    print("<br>");

    // ການ ລົບ ຫຼຶ ເພິ່ມ ໃນຕຳແໜ່ງທີ່ຕ້ອງການ (ເປັນການແຊກເຂົ້າໄປ) ຮຸບແບບ array_splice(ຊື່ອາເລ,ຕຳແໜ່ງ index,ຈຳນວນທີ່ຕ້ອງການ)
    print_r($fruits);
    print("<br>");
    // ແບບການລົບ
    array_splice($fruits,1,6); // ເປັນການບອກໃຫ້ລົບຕັ້ງແຕ່ ຈຳແໜ່ງທີ່ 1 ຈົນຮອດ 6
    print_r($fruits);
    print("<br>");


    //ແບບການເພິ່ມ
    array_splice($fruits,1,6,array("ອາຄຸນ","ກວ້ຍ")); // ເປັນການບອກໃຫ້ລົບຕັ້ງແຕ່ ຕຳແໜ່ງທີ່ 1 ຈົນຮອດ 6 ແລະ ເພິ່ມ ອາຄຸນ ແລະ ໜາກ ກວ້ຍ ຕໍ່ຈາກຕຳແໜ່ງທີ່ 1
    print_r($fruits);
    print("<br>");

?>