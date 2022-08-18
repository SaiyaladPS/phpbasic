<?php
function gettota($salary){
    $year = 12;
    return $salary * $year;

}
$amount = 15000;
print("ເງືອນເດືອນ = " . $amount);
print("<br>");
$total = gettota($amount);
    print("ລາຍໄດ້ຕໍ່ປີ = ". $total);
?>