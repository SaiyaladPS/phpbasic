<?php
$a = 500;
$b = 500;

var_dump($a == $b);
var_dump($a === $b);
/* 
<=>

a,b

ຖ້າ a<b = -1
ຖ້າ a>b = 0
ຖ້າ a=b = 1
*/

var_dump($a <=> $b);
?>