<?php 

abstract class Shape {

    abstract protected function getArea();

    abstract protected function getPerimeter();

}

class Triangle extends Shape {

    // declaring the attributes
    private $sides = array();
    private $perimeter = NULL;

    function __construct($side1 = 0, $side2 = 1, $side3 = 2){
        $this->sides[] = $side1;
        $this->sides[] = $side2;
        $this->sides[] = $side3;

        // calculate the perimeter of a shape
        $this->perimeter = array_sum($this->sides);
    }

    public function getArea()
    {
        return (SQRT( ($this->perimeter/2) *
        (($this->perimeter/2) - $this->sides[0]) * 
        (($this->perimeter/2) - $this->sides[1]) * 
        (($this->perimeter/2) - $this->sides[2]) ));
    }

    public function getPerimeter() {
        return $this->perimeter;
    }




}
// 





?>