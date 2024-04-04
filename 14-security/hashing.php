<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hashing</title>
</head>
<body>
    <h1>Hashing Functions in PHP</h1>
    
    <?php
        $food = "Rice amd Stew is good for you ok";
        $user_input = 'rasmuslerdorf';

        $salt = "shola";

        echo "This is the encoded version of food using md5 hashing algorithm: " .  md5($food, true) . "<br>";

        echo "This is the encoded version of food using sha1 hashing algorithm: " .  sha1($food, true) . "<br>";

        echo "This is the hashed version of food using crypt hashing algorithm: " .  crypt($food, $salt) . "<br>";

    ?>
</body>
</html>