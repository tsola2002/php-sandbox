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
    $a = 3;
    $b = 5;
    $c = 6;
    $d = 10;
    $e = "Hello";

    // ARITHMETIC OPERATORS
    echo "Basic Addition: " . $var1 + $var2 . "<br>";
    echo "Basic Subtraction:" . $var1 - $var2 . "<br>";
    echo "Basic Multiplication:" . $var1 * $var2 . "<br>";
    echo "Basic Division:" . $var1 / $var2 . "<br>";
    echo "Basic Modulus:" . $var1 % $var2 . "<br>";

    // INCREMENT
    echo '<strong>Post-increment: </strong>';
    $f = 5;
    var_dump($f++); // increment takes effect after the value is initialized
    var_dump($f);
    echo "<br>";

    echo 'Pre-increment:';
    $g = 5;
    var_dump(++$g); // increment takes effect before the value is initialized
    var_dump($g);
    echo "<br>";

    echo 'Post-decrement:';
    $i = 5;
    var_dump($i--);
    var_dump($i);
    echo "<br>";

    echo 'Pre-decrement:';
    $j = 5;
    var_dump(--$j);
    var_dump($j);
    echo "<br>";

    // COMPARISON OPERATORS
    echo 'double equal comparison:';
    var_dump(0 == "a");
    echo "<br>";

    echo 'double equal comparison:';
    var_dump(10 >= 10);
    echo "<br>";

    // LOGICAL OPERATORS
    echo ' and logical operator';
    $k = 1;
    $l = 0;
    var_dump( $k AND $l);
    echo "<br>";


    // ARRAY OPERATORS
    echo '<strong>Union of  m and n: </strong>';
    $m = array("a" => "apple", "b" => "banana");
    $n = array("p" => "pear", "s" => "strawberry", "c" => "cherry");
    $o = $m + $n;
    //var_dump($o);
    print_r($o);
    echo "<br>";

    ?>

    <p>plus equals:
        <?php echo $a += 5; //  $a = $a + 5  ?>
    </p>
    <p>minus equals:
        <?php echo $b -= 1; // $b = $b - 1    ?>
    </p>
    <p>multiply equals:
        <?php echo $c *= 3; // $b = $b - 1    ?>
    </p>
    <p>divide equals:
        <?php echo $d /= 2; // $b = $b - 1    ?>
    </p>
    <p>concatenation equals:
        <?php echo $e .= " There"; //gives us "Hello There" ?>
    </p>




</body>

</html>