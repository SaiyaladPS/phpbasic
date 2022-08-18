<?php
$citys = ["ໄຊຍະບຸລີ","ວຽງຈັນ","ນະຄອນຫຼວງ"];


foreach($citys as $city) {
    print($city. "<br>");
}



$room = ["A01"=>"ໄຊຍະລາດ","A02"=>"ອູອີ","A03"=>"ທິບ"];

foreach($room as $key=>$value) {
    print($key . " => " . $value . "<br>");
}

?>