<?php
$str = "Hello PHP I Love PHP";

// ການນຳໃຊ້ strstr
$result = strstr($str,"hello");
if($result){
    print("ຫາຂໍ້ຄວາມເຈີ<br>");
} else{
    print("ຫາຂໍ້ຄວາມບໍ່ເຈີ<br>");
}

// ການນຳໃຊ້ stristr
$result1 = stristr($str,"hello");
if($result1){
    print("ຫາຂໍ້ຄວາມເຈີ<br>");
} else{
    print("ຫາຂໍ້ຄວາມບໍ່ເຈີ<br>");
}

?>