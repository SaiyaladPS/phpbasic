<?php
    $color = ['ແດງ','ຟ້າ','ຂາວ','ສົ້ມ','ຂຽວ','ດຳ'];

    $total = count($color); // ນັບຈຳນວນສະມາຊິກໃນອາເລ color
    for($index = 0;$index<6;$index++){
        print($index . " = " . $color[$index]. '<br>');
    }


    $colors = ['ແດງ','ຟ້າ','ຂາວ','ສົ້ມ','ຂຽວ','ດຳ','ແດງ','ດຳ'];

    print_r(array_count_values($colors));

?>