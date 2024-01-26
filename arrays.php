<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arrays</title>
</head>

<body>
    <h1>Arrays</h1>

    <p><?php  
    $array1 = array(1, 2, 3, 4, 5, 6);  
    print_r($array1) ."<br>";      
    ?></p>
    <p> <?php echo $array1[2] ."<br>"; ?> </p>

    <p> <?php 
    $array2 = array("first_name" => "shola", "last_name" => "sobotie" );
    
    echo $array2["first_name"] ."<br>";

    ?> </p>

    <p> <?php
    $flower_shop = array("category1" => array("lotus", 2.50, 15), "category2" => array("red flower", 5.25, 20), "category3" => array("wild flower", 7.50, 70), ); 
    ?> 
    

</p>

<p> <?php echo $flower_shop["category2"][0] . " " . $flower_shop["category2"][1] . " " . $flower_shop["category2"][2]; ?> </p>

<p> <?php $flower_shop["category2"][0] = "black flower";

    echo $flower_shop["category2"][0];
?> </p>

</body>

</html>