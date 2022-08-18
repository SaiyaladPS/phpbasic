<?php
$count = 1;
$limit = 10;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>ລາຍການ</h1>
            <select name="" id="">
                <?php while ($count<=$limit){?>
                    <option value="<?php echo $count;?>">ລາຍການ<?php echo $count;?></option>
                    <?php 
                    $count++;
                }
                    ?>
            </select>
        </ul>
    </ul>
</body>
</html>