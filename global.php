<?php
// global
$x = 500;
$y = 10;

function shownumber(){
    global $x;
    $GLOBALS ["z"] = 20000;
    // local
    print("ຕົວປ່ຽນ x =" .$x."<br>");
    
}
shownumber();
print("ຄ່າ x = ".$x."<br>");
print("ຄ່າ z = ".$z."<br>");

?>