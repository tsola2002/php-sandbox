<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>

<body>
    <h1>String Functions</h1>

    <?php

    $firstString = "The quick brown fox";

    $secondString = "JUMPED OVER THE FENCE";

    $thirdString = $secondString;

    echo $thirdString . "<br>";

    echo strlen($firstString) ."<br>";

    echo strtoupper($firstString) ."<br>";

    echo strtolower($secondString) . "<br>";

    echo ucfirst($firstString) ."<br>";


    $text   = "\t\tThese are a few words...  ";

    $trimmed = trim($text);

    var_dump($trimmed) ."<br>";

    echo $trimmed . "<br>";

    ?>

</body>

</html>