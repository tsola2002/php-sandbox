<?php 

    //create custom error handler function
    function customErrorHandler($errno, $errstr, $errfile, $errline) {
        echo "New Error: [$errno] $errstr in $errfile on line $errline \n";
    }

    set_error_handler("customErrorHandler");

    // trigger an error
    echo $somefile;


?>