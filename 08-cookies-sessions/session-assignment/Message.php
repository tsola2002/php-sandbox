<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Thank you</title>
    </head>
    <body>
<?php
if(isset($_SESSION["user"]))
{
    echo "<h2>Your order has been successfully completed.We will deliver your order in next 4 working days.</h2>";
        echo "<form action='Logout.php' method='POST'><input type='submit'value='Logout'/></form>";
}
?>
    </body>
</html>
