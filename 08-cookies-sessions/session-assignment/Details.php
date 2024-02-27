<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Calculated Amount of Toys</title>
    </head>
    <body>
        <center>
            <table border="0">

                <?php
                if(isset($_SESSION["user"]))
                {
                $pr=0;
                $qt=0;
                foreach ($_SESSION['List'] as $key => $val) {

                    echo "<tr><td><b>" . $key . ":</b></td><td>" . $val . "</td></tr>";
                    if($key==='ItemPrice')
                      $pr=$val;
                    if($key==='ItemQty')
                      $qt=$val;
                }
                $amt = $pr * $qt;
                echo "<tr><td><b>Total Amount is <b>" . $amt . "</b></td></tr>";
                echo "<tr><td><form action='Message.php' method='POST'><input type='hidden' name='hd1'/><input type='submit' value='Submit'/></form></td></tr>";
                echo "<tr><td><a href='Home.php'>.... Continue</a></td></tr>";
                }
                ?>

            </table>
        </center>

    </body>
</html>
