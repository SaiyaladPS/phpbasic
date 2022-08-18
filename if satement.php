<?php
    $balnace = 1000;
    $withderaw = 500;

    if($withderaw<=$balnace && $withderaw>0){
        echo "ສາມາດກົດເງີນໄດ້ <br>";
        $balnace-=$withderaw;
        echo "ຈຳນວນເງີນຄົງເຫຼຶອ = ".$balnace."<br>";
    } else{
        echo "ບໍ່ສາມາດກົດເງີນໄດ້ <br>";
    }
    echo "ຈົບໂປຣແກຣມ";

?>