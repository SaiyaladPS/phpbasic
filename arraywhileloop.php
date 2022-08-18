<?php
    $colors = ["yellow"=>"ເຫຼຶອງ","red"=>"ແດງ","orange"=>"ສົ້ມ"];
    $animals = ["dog"=>"ໜາ","cat"=>"ແມວ","pig"=>"ໝູ","rabbit"=>"ກະຕ່າຍ"];
    $room = ["A01"=>"ໄຊຍະລາດ","A02"=>"ອູອີ","A03"=>"ທິບ"];

    while($item=each($room)) {
        print($item["key"]. "=>" . $item["value"] ."<br>");
    }
?>