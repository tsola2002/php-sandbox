<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <h1>Setting a session value</h1>

    <?php

    session_start();

    // CREATING OUR SESSION VALUES
    $_SESSION['first_name'] = "shola";
    $_SESSION["age"] = 10;

    //reset the session array 
    $_SESSION = [];

    //delete the session from the server 
    session_destroy();


    // ACCESSING OUR SESSION VALUES
    print '<p> Hello ' . $_SESSION['first_name'] . 
    ' your age is ' . $_SESSION['age']. '</p>';

    ?>


</body>

</html>