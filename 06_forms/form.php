<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div>
        <p>Please complete the registration form</p>
        <form action="handle-reg.php" method="post">
            <p>Email Address: <input type="text" name="email" id=""></p>
            <p>Password: <input type="password" name="password" size="20"></p>
            <p>Year You Were Born: <input type="text" name="year" placeholder="YYYY" size="5"></p>
            <p>Favorite Color:
                <select name="color">
                    <option value="">Pick One</option>           
                    <option value="red">Red</option>                
                    <option value="yellow">Yellow</option>                
                    <option value="green">Green</option>               
                    <option value="blue">Blue</option>
                </select>
            </p>
            <p>
                <input type="checkbox" name="terms" value="Yes">
                I agree to the terms (whatever they may be).
            </p>
            <input type="submit" name="submit" value="register">
        </form>
        <p>
        <?php
        echo $_COOKIE['testCookie'];
        ?>
        </p>
    </div>
    
</body>
</html>