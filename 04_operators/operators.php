<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operators</title>
</head>

<body>
    <h1>Operators</h1>

    <?php

    $var1 = 10;
    $var2 = 4;
   
    

    // ARITHMETIC OPERATORS
    echo "Basic Addition: " . $var1 + $var2 . "<br>";
    echo "Basic Subtraction:" . $var1 - $var2 . "<br>";
    echo "Basic Multiplication:" . $var1 * $var2 . "<br>";
    echo "Basic Division:" . $var1 / $var2 . "<br>";
    echo "Basic Modulus:" . $var1 % $var2 . "<br>";

    // INCREMENT
    echo '<strong>Post-increment: </strong>';
    $f = 2;
    var_dump($f++); // increment takes effect after the value is initialized
    var_dump($f++);
    var_dump($f);
    echo "<br>";


    echo 'Pre-increment:';
    $g = 5;
    var_dump(++$g); // increment takes effect before the value is initialized
    //var_dump(++$g);
    echo "<br>";

    echo 'Post-decrement:';
    $i = 5;
    var_dump($i--);  //5
    var_dump($i);  // 4
    echo "<br>";

    echo 'Pre-decrement:';
    $j = 5;
    var_dump(--$j);  // returns 4
    var_dump($j);    // returns 4
    echo "<br>";

    // COMPARISON OPERATORS
    echo 'double equal comparison:';
    var_dump("a" == "a");
    echo "<br>";

    echo 'double equal comparison:';
    var_dump(9 >= 10);
    echo "<br>";

    // LOGICAL OPERATORS
    echo ' and logical operator';
    $k = 1; // true
    $l = 1; // false 
    $z = 0;
    var_dump($k <=> $l);
    echo "<br>";


    // ARRAY OPERATORS
    //echo '<strong>Union of  m and n: </strong>';
    // $m = array("a" => "apple", "b" => "banana");
    // $n = array("p" => "pear", "s" => "strawberry", "c" => "cherry");
    // $o = $m + $n;
    //var_dump($o);
    // print_r($o);
    // array_pop($o);
    // print_r($o);
    // echo "<br>";

    // $stack = array("orange", "banana");
    // array_push($stack, "apple", "raspberry");
    // print_r($stack);
    
    // $stack = array("orange", "banana", "apple", "raspberry");
    // $fruit = array_pop($stack);
    // print_r($stack);


    ?>

    <p>plus equals:
        <?php  $a = 3; echo $a += 5; //  $a = $a + 5  ?>
    </p>
    <p>minus equals:
        <?php   $b = 5; echo $b -= 1; // $b = $b - 1    ?>
    </p>
    <p>multiply equals:
        <?php   $c = 6; echo $c *= 3; // $b = $b * 3    ?>
    </p>
    <p>divide equals:
        <?php   $d = 10; echo $d /= 2; // $b = $b / 5    ?>
    </p>
    <p>concatenation equals:
        <?php $e = "<b>Hello</b>";
        echo $e .= " There";
        echo $e .= " my friend"; //gives us "Hello There" ?>
    </p>




</body>

</html>