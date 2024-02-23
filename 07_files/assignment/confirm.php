<?php

// this will create and open a file called ProductsDetails.txt
$file = fopen("ProductDetails.txt", "a+");

$Id = $_POST["ProductID"];
$Name = $_POST["ProductName"];
$Price = $_POST["Price"];

$text = "\r" . $Id . "\t\t" . $Name . "\t\t" . $Price . "\r";

if (fwrite($file, $text) == false) {
    die("can't write");

}

fclose($file);

print("Data written successfully");



?>