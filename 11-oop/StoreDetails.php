<?php

class Item
{
    private $ItemCategory;
    private $ItemName;
    private $No_of_units;
    private $price;
    public function __construct($Ic, $In, $No, $p)
    {
        $this->ItemCategory = $Ic;
        $this->ItemName = $In;
        $this->No_of_units = $No;
        $this->price = $p;
    }
    public function AddDetails()
    {

        $str = "$this->ItemCategory \t $this->ItemName \t $this->No_of_units \t $this->price \r";


        $file = fopen("item.txt", "a+");
        fwrite($file, $str);
        fclose($file);


        echo "<br>Item Category is: $this->ItemCategory <br> Name of the item is: $this->ItemName <br> Number of units is:  $this->No_of_units <br> Price is: $this->price ";





    }
}

echo "<h3> The following details are stored successfully in a file:</h3>";
$p = new Item($_POST["ItemCategory"], $_POST["ItemName"], $_POST["No_of_units"], $_POST["Price"]);
$p->AddDetails();



?>