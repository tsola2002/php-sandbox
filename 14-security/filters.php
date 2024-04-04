<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validation Filters</title>
</head>

<body>
    <h1>VALIDATION FILTERS</h1>
    <?php
    $my_email = "tsola2002";
    $number = 0755;
    $boolean = true;

    //var_dump(filter_var($my_email, FILTER_VALIDATE_EMAIL));
    
    if (filter_var($my_email, FILTER_VALIDATE_EMAIL)) {
        echo "the email validated succesfully" . "<br>";
    } else {
        echo "This email is not valid. Try again" . "<br>";
    }

    if (filter_var($number, FILTER_VALIDATE_INT)) {
        echo "the number validated succesfully" . "<br>";
    } else {
        echo "This number is not valid. Try again" . "<br>";
    }

    // if (filter_var($boolean, FILTER_VALIDATE_BOOLEAN)) {
    //     echo "the boolean validated succesfully" . "<br>";
    // } else {
    //     echo "This boolean is not valid. Try again" . "<br>";
    // }

    var_dump(filter_var($boolean, FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE));

    ?>
</body>

</html>