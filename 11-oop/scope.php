<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scope Resolution Operator</title>
</head>
<body>
    <?php 

        class Pet {
            public $name;

        // CONSTRUCTOR    
        public function __construct($pet_name){
            $this->name = $pet_name;
           // self::sleep();
        }
        
        function eat(){
            echo "<p>$this->name is eating.</p>";
        }

        function sleep(){
            echo "<p>$this->name is sleeping.</p>";
        }

        function play(){
            echo "<p>$this->name is playing.</p>";
        }


        }

    class Cat extends Pet{
        function play()
        {
            // call the Pet::play() method 
            //parent::play();
            echo "<p> $this->name is meowing.</p>";
        }
    }

    class Dog extends Pet {
        function play()
        {
            // call the Pet::play() method 
           // parent::play();
            echo "<p> $this->name is barking.</p>";
        }
    }

    $tom = new Cat("Tom");
    $dog = new Dog("Snoop");
    $pet = new Pet("Anonymous");

    //Feed all of them
    // $tom->eat();
    // $dog->eat();
    // $pet->eat();

    // Have all of them play
    $tom->play();
    $dog->play();
    $pet->play();

    // Deleting the objects
    unset($tom, $dog, $pet);

    //$tom->play();


    ?>
</body>
</html>