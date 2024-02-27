<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>List of Toys</title>
    </head>
    <body>
        <center>
            <?php
            if(isset($_SESSION["user"]))
            {
            echo "Welcome  " . $_SESSION["user"]." "."<form action='Logout.php' method='POST'><input type='submit'value='Logout'/></form>";
            $TName = array("101" => 'Robby the Whale', "102" => 'Water Channel System', "103" => 'Parachute and Rocket', "104" => 'Super Deluge', "105" => 'Light Show Lamp');
            $TDescription = array("101" => 'A giant Blue Whale with two heavy-duty', "102" => 'Children enjoy playing with water', "103" => 'Step on the launch pad and the rocket is launched', "104" => 'Create artificial rainfall in your garden', "105" => 'Build a revolving, glowing mood lamp');
            $TPrice = array("101" => 8.99, "102" => 33.99, "103" => 6.99, "104" => 35.99, "105" => 15.99);

            echo "<form method='POST'>";
            echo "<table  border='0'><tr><td>";
            echo "Select Toy Name <select id='drp1' name='drpName'>";
            echo "<option value='0'>Please Select</option>";
            foreach ($TName as $key => $val) {
                echo "<option value='" . $key . "'>" . $val . "</option>";
            }
            echo "</td></select>" . "<br>";
            echo "<td><input type='submit' value='Show Details'/></td></tr>";
            echo "</form>";
            echo "</table>";

            if ($_POST) {
                echo"<center><table border='0'>";
                $val = $_POST['drpName'];
                if ($val == 0) {
                    echo "<font color='red'>Please Select Toy Name</font>";
                    exit;
                }
                echo "<form action='Show.php' method='POST'>";
                echo "<input type='hidden' name='txtName1' value='" . $TName[$val] . "'/>";
                echo "<tr><td>Description : </td><td><input type='text' id='desc' name='txtDesc' value='" . $TDescription[$val] . "'/></td></tr>";
                echo "<tr><td>Price : </td><td><input type='text' name='txtPrice' id='price' value='" . $TPrice[$val] . "'/></td></tr>";
                echo "<tr><td>Quantity: </td><td><input type='text' name='txtQty'/></td></tr>";
                echo "<tr><td></td><td><input type='submit' value='Submit'/></td><td></td></form></table>";
            }
            }
            ?>
        </center>
    </body>
</html>
