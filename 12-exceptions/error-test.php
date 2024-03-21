<?php

require('error.php');

try {
    $fileObject = new FilePointer('data.txt');
    $fileObject->write("This is data.txt content");
    echo '<p>Data has been written</p>';

    $fileObject->close();
} catch (Exception $e) {
    echo "<p>The process could not be completed
        because " . $e->getMessage() . "</p>";
}



