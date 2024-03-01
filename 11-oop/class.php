<?php 

class Person {

    public $name;

    public function say_hello(){
        echo "Hello Omatsola";
    }

    public function say_goodbye(){
        echo "goodbye Omatsola";
    }


}

if(method_exists('Person', 'say_goodbye')) {
    echo "Method does exist. <br />";
} else {
    echo "Method does not exist. <br />";
}

// if(class_exists("Animal")) {
//     echo "The class Animal Exists";
// } else {
//     echo "The class Animal does not Exist";
// }



class Animal {

}

// $classes = get_declared_classes();
// foreach($classes as $class) {
//     echo $class . "<br />";
// }




?>