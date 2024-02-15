<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expressions</title>
</head>
<body>
    <h1>Regular Expressions</h1>

    <?php 

    // sample string
    $string = "My name is shola, shola is my name";
    
    // 1. searches our string to see if we have certain characters
    //if(preg_match("/shola/", $string, $array)){
    //      if(preg_match_all("/shola/", $string, $array)){
    //    echo "Success: it is a match" . "<br/>";
    //  print_r($array);
    // } else {
    //    echo "Failure: it is not a match";
    //}

    // 2. using preg_replace to preg_replace certain strings
    //$replaced = preg_replace("/shola/","John", $string);
    //echo $replaced;

    ?>
</body>
</html>