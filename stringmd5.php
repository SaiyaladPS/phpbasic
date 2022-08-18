<?php

$pass = "Saiyalad96778932";

echo "ລະຫັດ" . $pass . "<br>";

$result = md5($pass); // ເປັນການເຂົ້າລະຫັດແບບ md5
echo "md5 = " . $result . "<br>";

$result = sha1($pass); // ເປັນການເຂົ້າລະຫັດແບບ sha1
echo "sha1 = " . $result . "<br>";

$result = crypt($pass,"kod");//ເປັນການເຂົ້າລະຫັດແບບ crupt ທີ່ມີເວລາເຂົ້າມາກ່ຽວ
echo "crypt = " . $result . "<br>";

$encode = base64_encode($pass);// ເປັນການເຂົ້າລະຫັດ ເຮັດວຽກສຳພັນກັບ base64_decode
echo "base64_encode = " . $encode . "<br>";

$result = base64_decode($encode);// ເປັນການແກ້ລະຫັດຈາກ base64_encode
echo "bases64_decode = " . $result . "<br>";
?>