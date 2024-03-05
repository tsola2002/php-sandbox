<?php

    require('abstract.php');

    $side1 = 5;
    $side2 = 10;
    $side3 = 7;

    // Print a little introduction:
    echo "<p>With sides of $side1, $side2, and $side3...</p>";

    $t = new Triangle($side1, $side2, $side3);

// Printing the perimeter of the Triangle
echo "<p>The Perimeter of the triangle is: " . $t->getPerimeter() . "</p>";

// Printing the area of the triangle
echo "<p>The Area of the triangle is: " . $t->getArea() . "</p>";



?>