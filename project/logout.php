<?php

    if (isset($_COOKIE['Samuel'])) {
        setcookie('Samuel', FALSE, time()-300);
    }

    define('TITLE', 'Logout');
    
    include('templates/header.html');

    echo '<p>You are now logged out.</p>';


    include('templates/footer.html');



?>