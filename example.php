<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP & HTML</title>
    <style>
        h1{
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>PHP ລ່ວມກັບ HTML</h1>
    <?php
        // ການໃຊ້ echo
        echo "Saiyalad";
        echo "<h1>ສອນ ພາສາ PHP</h1>" //ສາມາດໃສແທັກຂອງພາສາ HTML ໄດ້

        // ການໃຊ້ print
        print("Saiyalad print");
    ?>

        <!-- ການນຳໃຊ້ກັບ ແບບຟ້ອນ -->
        <form action="">
            <label for="">fname</label>
            <input type="text" name="" id="" value="<?php echo "ໄຊຍະລາດ" ?>">
            <label for="">lname</label>
            <input type="text" name="" id="" value=" <?php echo "ພຽນສອນ" ?>">
        </form>
</body>
</html>