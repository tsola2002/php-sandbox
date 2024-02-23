<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Global Electronics Ltd.</title>
        <script type="text/javascript">
            function fun1()
            {
                var str1= document.getElementById("role").value.toString();
                var str2= document.getElementById("username").value.toString();
                var str3= document.getElementById("password").value.toString();
                if(str1=='Please Select')
                {
                    alert('Please select any role');
                    return false;
                }
                if(str2.length<=0 || str3.length<=0)
                {
                    alert('Please provide values for all fields');
                    return false;
                }
                return true;

            }
        </script>
    </head>
    <body>
        <center>
         <div style="width: 750px; height:100px; background-color:cornflowerblue; ">
           <b><center><font style="font-family: Arial, Helvetica, sans-serif;" size="+8" color="#FFFFFF"> Global Electronics Ltd.</font></center></b>
        </div>
        </center>
        <center>

            <form action="Validate.php" method="POST" >
                <table border="0">
                    <caption><b>Login</b></caption>
                    <tr>
                        <td>Select Type of User</td><td> <select id="role" name="role">
                                <option value="Please Select">Please Select</option>
                                <option value="Admin">Admin</option>
                                <option value="User">User</option>
                            </select></td>
                    </tr>

                    <tr><td>Enter Username</td><td> <input type="text" id="username" name="username"/></td></tr>
                    <tr><td>Enter Password</td><td><input type="password" name="password" id="password"/></td></tr>
                    <tr><td></td><td><input type="submit" value="Submit" onclick="return fun1()"/></td><td></td></tr>
                </table>
            </form>
        </center>
    </body>
</html>
