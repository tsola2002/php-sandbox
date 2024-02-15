<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>

<body>
    <h1>Setting a cookie value</h1>

    <?php

    // CREATING A COOKIE 
    setcookie("testCookie", "shola", time() + 6000);

    // DELETING A COOKIE
    setcookie("testCookie", FALSE);


    ?>


</body>

</html>