<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions</title>
</head>

<body>
    <h1>Functions</h1>

    <?php


    // ARRAY FUNCTIONS
    // array_rand()
    // $input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank", "Ghost");
    // $rand_keys = array_rand($input, 2);
    // echo $input[$rand_keys[0]] . "<br>";
    // echo $input[$rand_keys[1]] . "<br>";

    // array_merge()
    // $array1 = array("color" => "red", 2, 4);
    // $array2 = array("c", "d", "g" => "green", "shape" => "trapezoid", 4);
    // $result = array_merge($array1, $array2);
    // print_r($result);
    //var_dump($result);

    // BUILT-IN FUNCTIONS
    // date functions
    // echo date('L') . "<br>"; // Displays the day of the week 
    //echo(date(" l dS \of F Y h :i :s A ")) . "<br>";

    // time functions
    echo 'Now: '. time();  // returns a timestamp


    //calendar functions
    $week=cal_to_jd(CAL_GREGORIAN,date("m"),date("d"),date("Y"));


    // echo strrev(" .dlrow olleH") . "<br>";

    // $lowered = strtolower("NIGERIA");
    // echo $lowered . "<br>";


    // USER DEFINED FUNCTIONS
    // function fix_names($n1, $n2, $n3)
    // {

    //     $n1 = strtolower($n1);
    //     $n2 = strtolower($n2);
    //     $n3 = strtolower($n3);

    //     return $n1 . " " . $n2 . " " . $n3;

    // }

    //echo fix_names("WELCOME", "TO", "NIGERIASSS") . "<br>";
    

    // PASSING A VALUE BY REFERENCE
    // $a1 = "WELCOME";
    // $a2 = "TO";
    // $a3 = "NIGERIA";

    // echo $a1 . " " . $a2 . " " . $a3 . "<br>";
    // fix_names($a1, $a2, $a3);
    // echo $a1 . " " . $a2 . " " . $a3 . "<br>";


    ?>



</body>

</html>