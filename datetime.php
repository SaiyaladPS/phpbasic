<?php
date_default_timezone_set("Asia/Bangkok");
echo time();

echo "<br>";
echo "ວັນປັດຈຸບັນ" . date("d/m/y" ,time());
echo "<br>";
$days3 = time()+(60*60*24*3);
echo "3ວັນທາງໜ້າຄືວັນ" . date("d/m/y",$days3);
echo "<br>";

$week = time()+(60*60*24*7);
echo "1 ທິອາທາງໜ້າຄືວັນທີ່" . date("d/m/y",$week);
echo "<br>";

?>