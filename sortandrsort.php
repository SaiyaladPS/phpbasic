<?php
        $colors = ['ແດງ','ຟ້າ','ຂາວ','ສົ້ມ','ຂຽວ','ດຳ','ແດງ','ດຳ'];
        $number = [1,22,14,23,5,6,66,12];


        // ລຽງທີ່ເປັນຕົວເລກ
        print_r($number);
        print("<br>");

        // ລຽງຈາກໜ້ອຍຫາຫຼາຍ ແບບ ຕົວເລກ
        sort($number);
        print_r($number);
        print("<br>");

        // ລຽງຈາກຫຼາຍ ຫາ ໜ້ອຍ ແບບ ຕົວເລກ
        rsort($number);
        print_r($number);
        print("<br>");

        // ລຽງເປັນຕົວໜັງສຶ
        print_r($colors);
        print("<br>");

        // ລຽງຈາກໜ້ອຍຫາຫຼາຍ ແບບ ຕົວໜັງສຶ
        sort($colors);
        print_r($colors);
        print("<br>");

        // ລຽງຈາກຫຼາຍ ຫາ ໜ້ອຍ ແບບ ຕົວໜັງສຶ
        rsort($colors);
        print_r($colors);
        print("<br>");

?>