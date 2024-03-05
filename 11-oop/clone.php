<?php 
    class User {
        var $logo;

        var $name;
    }

    $user1 = new User();
    $user1->logo = "Nike";
    $user1->name = "Adedayo";

    $user2 = clone $user1;
    $user2->name = "Smith";
    $user2->logo = "Adidas";

    echo $user1->name . "<br>";
    echo $user1->logo . "<br>";

    echo $user2->name . "<br>";
    echo $user2->logo . "<br>";








?>