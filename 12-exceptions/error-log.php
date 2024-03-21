<?php 

    // sppecify the file where the error messages will be sent to
    $logFile = "/Applications/MAMP/htdocs/niit/12-exceptions/error_log.txt";

    // create error message
    $errorMsg = "An error occured" . date('Y-m-d H:i:s');

    // log the error message
    error_log($errorMsg . "\n", 3, $logFile);

    //output a message to indicate that the error has been logged
    echo "Error logged successfully. Check ". $logFile . " for details";


?>