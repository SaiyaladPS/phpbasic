<?php
date_default_timezone_set("Asia/Bangkok");
print_r(getdate());
echo "<br>";

$date_time = getdate();

echo "ວັນທີ່ = " . $date_time["mday"] . "<br>";
echo "ເດືອນ = " . $date_time["month"] . "<br>";
echo "ປີ = " . $date_time["year"] . "<br>";
echo "ຊົ່ວໂມງ = " . $date_time["hours"] . "<br>";
echo "ນາທີ່ = " . $date_time["minutes"] . "<br>";
echo "ວິນາທີ່ = " . $date_time["seconds"] . "<br>";

?>