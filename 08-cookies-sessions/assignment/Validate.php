<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title>Global Electronics Ltd.</title>
</head>

<body>

    <?php
    if ($_POST) {
        $count = 0;

        echo "<center><div style='width: 750px; height:100px; background-color:cornflowerblue; '>
           <b><center><font style='font-family: Arial, Helvetica, sans-serif;' size='+8' color='#FFFFFF'> Global Electronics Ltd.</font></center></b>
        </div>
        </center>
        <center>";
        $role = $_POST["role"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $users = array("John" => "john@123", "Richard" => "richard@321", "Smith" => "smith@999");
        if ($role == "Admin" && $username == "admin123" && $password == "password@123") {
            $count = 1;
            setcookie("user", "Peter");
            header("Location:Admin.php");
        } else if ($role == "User") {
            foreach ($users as $key => $val) {

                if ($key === $username && $val === $password) {
                    $count = 1;
                    setcookie("user", $key);
                    header("Location:Home.php");
                    break;
                }
            }
        }
        if ($count == 0) {
            echo "<center><font color='red'>Invalid username and password</font><a href='Login.php'>  Try Again</a></center>";
        }
    }
    ?>
</body>

</html>