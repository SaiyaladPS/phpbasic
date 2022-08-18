<?php
for($i = 1; $i<=10;$i++){
    echo $i."<br>";
    if($i==5){
        break;
    }

}
for($j = 1; $j<=10;$j++){
    echo $j."<br>";
    if($j==5){
        continue;
    }

}
for($k = 1; $k<=10;$k++){
    echo $k."<br>";
    if($k==5){
        continue;
    }
    exit;
    echo "ຈົບໂປຣແກຣມ";

}

?>