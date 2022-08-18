<?php
function show($message){
    print("Hello = ".$message. "<br>");
}
function add($a ,$b){
    $c = $a + $b;
    print($a ."+". $b . "=" . $c);
}

show("Saiyalad");
add(10,20);
?>