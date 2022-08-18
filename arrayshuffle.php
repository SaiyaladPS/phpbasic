<?php
        $country = ["LAO"=>"ລາວ","TH"=>"ໄທ","JP"=>"ຍີປຸ່ນ","US"=>"ສະຫາລັດ"];
        // ແບບ shuffle
        print_r($country); // ກອ່ນ
        shuffle($country); // ສະລັບຄ່າ
        print("<br>");
        print_r($country); // ຜົນການສະລັບ
        print("<br>");


        // ແບບ 
        $number=range(1,10);
        print_r($number);
        print("<br>");

        $new_number = array_reverse($number);
        print_r($new_number);


?>