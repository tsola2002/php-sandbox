<?php

    $handle = curl_init();

    curl_share_setopt($ch, CURLOPT_URL, "https://randomuser.me/api");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

    // curl_setopt_array($ch, [
    //     CURLOPT_URL => "https://randomuser.me/api",
    //     CURLOPT_RETURNTRANSFER => true
    // ]);

    $response = curl_exec($ch);

    curl_close($ch);

    echo $response, "\n";

?>