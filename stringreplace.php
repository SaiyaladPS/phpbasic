<?php
$str = "Hello PHP , Hello JavaScript";

// ການນຳໃຊ້ str_replace
$newstr = str_replace("Hello","ສະບາຍ",$str);
echo $newstr . "<br>";

// ການນຳໃຊ້ strrev
$str1 = "Hello";
$newstr1 = strrev($str1);
echo $newstr1 . "<br>";

// ການນຳໃຊ້ str_repeat
$newstr2 = str_repeat($str1,5);
echo $newstr2;

?>