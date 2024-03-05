<?php

class Person
{

    var $name;

    var $age;

    var $arm_count = 4;

    var $leg_count = 10;

    public function say_hello()
    {
        echo "Hello from inside " . get_class($this) . "<br>";
    }

    public function say_goodbye()
    {
        echo "goodbye Omatsola";
    }


}
// CREATED AN OBJECT OF THE PERSON CLASS
$new_person = new Person();

$second_person = new Person();

// WE ACCESS THE METHOD FROM THE OBJECT
//    echo $new_person->say_hello() ."<br>";

//echo $second_person->say_hello() ."<br>";

// // ACCESSING THE PROPERTIES OF THE CLASS
// echo $new_person->arm_count . "<br>";

$new_person->leg_count = 4;
$second_person->leg_count = 10;

// echo $new_person->leg_count ."<br>";
// echo $second_person->leg_count ."<br>";

//echo property_exists('Person', 'leg_count') ? 'true' : 'false';

// if(method_exists('Person', 'say_goodbye')) {
//     echo "Method does exist. <br />";
// } else {
//     echo "Method does not exist. <br />";
// }

// if(class_exists("Animal")) {
//     echo "The class Animal Exists";
// } else {
//     echo "The class Animal does not Exist";
// }



class Animal
{

}

// $classes = get_declared_classes();
// foreach($classes as $class) {
//     echo $class . "<br />";
// }

$vars = get_class_vars('Person');
foreach($vars as $var => $value) {
    echo "{$var} : {$value}<br />";
}




?>