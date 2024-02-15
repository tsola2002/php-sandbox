<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Page</title>
</head>

<body>
    <h1>First Page</h1>
    <a href="secondpage.php?id=1&name=shola">
        CLICK HERE FOR SECOND PAGE
    </a>
    <p>
        <?php
        session_start();
       // echo $_COOKIE['testCookie'];
        
        echo $_SESSION['first_name'];

        ?>
    </p>


</body>

</html>