<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Login Page</title>
        <script type="text/javascript">
            function fun1()
            {
                var str1 = document.getElementById('username').value.toString();
                var str2 = document.getElementById('password').value.toString();
                if(str1.length<=0 || str2.length<=0)
                {
                    alert("Please provide values for both the fields.") ;
                    return false;
                }
                return true;
            }
        </script>
    </head>
    <body>
        <center>
            <table border="0">
                <caption>Login</caption>
                <form action="Validate.php">
                    <tr><td>Username </td><td><input id="username" type="text" name="username"/></td></tr>
                    <tr><td>Password </td><td><input type="password" id="password" name="password"/></td></tr>
                    <tr><td></td><td><input type="submit" value="Submit" onclick="return fun1()"/></td><td></td>
                </form>
            </table>
        </center>
    </body>
</html>
