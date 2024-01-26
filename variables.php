<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable</title>
</head>

<body>
    <h1>Creating Variables</h1>

    <?php

    // CREATING A VARIABLE 
    $num1 = 5;
    $num2 = 3;

    echo $num1 . "<br>";
    echo $num2 . "<br>";

    // create a super global
    echo "Server Name: " . $_SERVER["SERVER_ADDR"] . '<br>';

    echo "Server Name: " . $_SERVER["SERVER_NAME"] . '<br>';
    echo "Server Port: " .$_SERVER["SERVER_PORT"] . '<br>';
    echo "Server Protocol:" .$_SERVER["SERVER_PROTOCOL"] . '<br>';
    echo "Server Admin:" .$_SERVER["SERVER_ADMIN"] . '<br>';

    // creating a constant
    define("pi", 3.14);

    echo "the circles pi is: " . pi . "<br>";
    echo defined("pi") . "<br>";




    ?>

</body>

</html>