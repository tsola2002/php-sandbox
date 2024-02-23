<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Global Electronics Ltd.</title>
</head>

<body>
    <?php
    if (isset($_COOKIE["user"])) {


        echo "<center><div style='width: 750px; height:100px; background-color:cornflowerblue; '>
           <b><center><font style='font-family: Arial, Helvetica, sans-serif;' size='+8' color='#FFFFFF'> Global Electronics Ltd.</font></center></b>
        </div></center>
        <center>";


        echo "<center><b>Welcome " . $_COOKIE["user"] . "</b><a href='Login.php'><b>  Logout </b></a></center>";
        echo "</center>";
        ?>
        <br>
        <br>
        <center>
            <a href="#">View Stock</a><br><br>
            <a href="#">Add Customers</a><br><br>
            <a href="#">View Salary Slips</a><br><br>
        </center>
        <?php
    }
    ?>
</body>

</html>