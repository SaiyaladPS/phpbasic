<?php
// ແບບ 2 ມິຕິ
        $products = array(
            array("Keyboard","ຄິບອດ",900),
            array("Mouse","ເມົາ",1900),
            array("Table","ໂຕະ",2500)
        );

        // ການເຂົ້າເຖິງ => ແຖວ , ຄໍລຳ
            print($products[0][0] . "<br>");

        // ການເຂົ້າເຖິງດວ້ຍ for loop
        for($row = 0;$row < count($products);$row++) {
            print("ແຖວທີ່ = " . $row . "<br>");
            for($column = 0;$column < count($products[$row]);$column++) {
                print($products[$row][$column] . "<br>");
            }
        }

        //  ການເຂົ້າເຖິງ array 2 ມິຕິ ດວ້ຍການໃຊ້  for each

        foreach($products as $product) {
            print("ຊື່ສິຄ້າ (EH) = " . $product[0] . "<br>");
            print("ຊື່ສິຄ້າ (HT) = " . $product[1] . "<br>");
            print("ລາຄາ = " . $product[2] . "ບາດ" . "<br>");
        }

?>