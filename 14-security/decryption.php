<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Decryption</title>
</head>

<body>
    <h1>Decryption Functions</h1>

    <?php

        $str = 'This is an encoded string';
        $uuString = " this is a second string";
        echo "this is a the variable str before encoding: " . $str . "<br>";

        echo "This is the encoded version of the str using base64 encoding: " . base64_encode($str) . "<br>";

        $encryptedString = base64_encode($str);

        echo "This is our encoded string converted back to plain text: " . base64_decode($encryptedString) . "<br>";

        echo "This is the encoded version of the uuString using uuEncode Algorithm: <strong>" . convert_uuencode($uuString) . "</strong><br>";

        $uuEncodedString = convert_uuencode($uuString);

        echo "This is the decoded version of the uuString using uuDecode Algorithm: <strong>" . convert_uudecode($uuEncodedString) . "</strong><br>";


    ?>
</body>

</html>