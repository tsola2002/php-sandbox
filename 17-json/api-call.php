<?php

$response = file_get_contents("https://randomuser.me/api");

$data = json_decode($response, true);

$arr = array('Name' => 'Omatsola', 'Age' => 30, 'Address' => 'Lekki');

$encoded_data = json_encode($arr);

//var_dump($encoded_data);

//var_dump($data);

echo $data['results'][0]['login']['password'];


// echo $data;


//print_r($data);

?>