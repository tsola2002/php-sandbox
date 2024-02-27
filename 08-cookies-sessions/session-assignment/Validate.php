<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<?php session_start(); ?>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Validating Data</title>
    </head>
    <body>
        <?php
        $username = $_GET["username"];
        $pass = $_GET["password"];
        if ($username == "John" && $pass == "password12") {
            $_SESSION["user"] = $username;
            header("Location:Home.php");
        }
        else
            echo "<center><font color='red'>Invalid username and password</font><a href='Login.php'>  Try Again</a></center>";
        ?>
    </body>
</html>
