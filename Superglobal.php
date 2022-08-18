<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Superglobal</title>
</head>
<body>
    <?php
    // PHP Superglobal

    /**
     * $GLOBALS
     * $_SERVER
     * $_REQUEST
     * $_POST
     * $_GET
     * $_FILES
     * $_ENV
     * $_COOKIE
     * $_SESSION
     */
    ?>
    <?php
    //ການໃຊ້ $GLOBALS
    $x = 10;
    $y = 20;

        function addition() {
            $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        addition();
        echo $z . "<hr>";
    ?>

    <?php
        // ການໃຊ້ $_SERVER
        echo $_SERVER['PHP_SELF'] . "<br>";
        echo $_SERVER['SERVER_NAME'] . "<br>";
        echo $_SERVER['HTTP_HOST'] . "<br>";
        echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
        echo $_SERVER['SCRIPT_NAME'] . "<hr>";
        ?>

        <?php
        // ການໃຊ້ $_REQUEST
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $name = $_REQUEST['fname'];
            if(empty($name)) {
                echo "Name is empty";
            } else {
                echo $name;
            }
        }
        ?>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        Name : <input type="text" name="fname">
        <input type="submit">
        </form>
        <hr>


        <!-- $_GET -->
        <form action="Super_get.php" method="get">
            Name : <input type="text" name="name">
            <br>
            Email : <input type="text" name="email">
            <br>
            <input type="submit">
        </form>
        <hr> 
        <!-- $_POST -->
        <form action="Super_post.php" method="post">
            Name : <input type="text" name="name">
            <br>
            Email : <input type="text" name="email">
            <br>
            <input type="submit">
        </form>
        <hr>

        <!-- $_SESSION -->
        <?php session_start(); ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <?php $_SESSION['name'] = "ໄຊຍະລາດ";
                    $_SESSION['lname'] = "ພຽນສອນ";
             ?>
        </body>
        </html> 
</body>
</html>