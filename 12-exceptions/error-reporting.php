<?php

    // set the error reporting levels
    error_reporting(E_ALL & ~E_NOTICE);

    ini_set("error_log", "error.log");

    $undefinedVariable;

    echo 1 / 0;

    // Generate a custom error (which will be logged)
    trigger_error("This is a custom error", E_USER_ERROR);

?>