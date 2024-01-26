<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loops</title>
</head>

<body>
    <h1>Loops</h1>

    <?php

    // IF LOOP
    // $age = 15;
    // if ($age > 12)
    // {
    //     echo "You can play the game"; 
    // }
    // else {
    //     echo "sorry you cannot play the game";
    // }
    
    // IF ELSE LOOP
    // echo "IF/ELSE LOOP" . "<br>";
    // $age = 20;
    // if ($age >= 18) {
    //     echo "You are eligible to cast vote";
    // } elseif ($age >= 0 and $age < 18) {
    //     echo "Sorry, you cannot vote";
    // } else {
    //     echo "Invalid age";
    // }
    

    // SWITCH STATEMENT
    
    // $day = 5;
    // switch ($day) {
    //     case 1:
    //         echo "The day is Sunday";
    //         break;
    //     case 2:
    //         echo "The day is Monday";
    //         break;
    //     case 3:
    //         echo "The day is Tuesday";
    //         break;
    //     case 4:
    //         echo "The day is Wednesday";
    //         break;
    //     case 5:
    //         echo "The day is Thursday";
    //         break;
    //     case 6:
    //         echo "The day is Friday";
    //         break;
    //     case 7:
    //         echo "The day is Saturday";
    //         break;
    //     default:
    //         echo "Leave";
    // }
    

    // WHILE LOOP
    // $num = 1;
    // while ($num <= 20) {
    //     echo $num++;
    //     echo "<br>";
    // }
    


    //DO WHILE LOOP
    // $count = 1;
    // do {
    //     echo "$count times 12 is: " . $count * 12 . "<br>";
    // }
    // while (++$count <= 20);   
    



    // FOR LOOP 
    
    // for ($count = 1; $count <= 12; ++$count) {
    //     echo $count . " times 12 is: " . $count * 12 . "<br>";
    // }
    


    // for ( $i = 1; $i <= 20; $i++ ) {
    //     echo $i;
    //     echo "<br>";
    // }
    
    //FOR EACH LOOP
    // $books = array("Gone with the Wind", "Harry Potter", "Peter Pan", "Three States of My Life", "Tink");
    // foreach ($books as $val)
    // {
    //     echo $val;
    //     echo "<br>";
    // }
    
    $arr = array(1, 2, 3, 4);
    foreach ($arr as &$value) {
        $value = $value * 2;
        echo $value;
        echo "<br>";
    }


    ?>









</body>

</html>