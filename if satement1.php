<?php
$score = 50;
$grade = "";
if($score>=80){
    $grade = "B";
}
if($score>=60){
    $grade = "C";
}
if($score>=50){
    $grade = "D";
}else{
    $grade = "F";
}

echo "ຄະແນນຄື: ".$score. "ເກດ".$grade;
?>