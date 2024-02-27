<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Error Details</title>
    </head>
    <body>
        <center>
            <?php
            if(isset($_SESSION["user"]))
            {
            $name = $_POST['txtName1'];
            $desc = $_POST['txtDesc'];
            $price = $_POST['txtPrice'];
            $qty = $_POST['txtQty'];
            if (strlen($qty) === 0) {
                echo "<p><font color='red'>Invalid quantity</font></p>";
                echo "<a href='Home.php'>.... Back</a>";
            } else if (strlen($qty) > 0) {
                for ($i = 0; $i < strlen($qty); $i++) {
                    $val = ord($qty[$i]);
                    if ($val < 48 || $val > 57) {

                        echo "<p><font color='red'>Invalid quantity</font></p>";
                        echo "<a href='Home.php'>.... Back</a>";
                        exit;
                    }
                }
            }
            if (strlen($qty) > 0) {
                $item = array("ItemName" => $name, "ItemDesc" => $desc, "ItemPrice" => $price, "ItemQty" => $qty);
                $_SESSION['List'] = $item;
                header('Location:Details.php');
            }
            }
            ?>
        </center>
    </body>
</html>
