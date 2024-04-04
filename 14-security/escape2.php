<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

        print_r($_GET);
        $name = urldecode($_GET['name']);
        $id = $_GET['id'];
        echo "<br /><strong>" . $id .": {$name}</strong>"; 

    ?>
</body>

</html>