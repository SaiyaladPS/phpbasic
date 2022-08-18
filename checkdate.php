<?php
date_default_timezone_set("Asia/Bangkok");

$result = checkdate(11,2,2022);

if($result) {
    echo "ຮູບແບບວັນຖືກຕ້ອງ";
} else {
    echo "ຮູບແບວັນບໍ່ຖືກຕ້ອງ";
}
?>