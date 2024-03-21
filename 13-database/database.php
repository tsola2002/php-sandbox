<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database</title>
</head>

<body>
    <h1>Database Functions</h1>

    <?php

    $hostname = 'localhost';
    $dbname = 'DB_JOBERA';
    $username = 'root';
    $password = 'root';

    // 1. create a connection to our database
    $con = new mysqli($hostname, $username, $password, $dbname);

    // 2. test connection for errors
    if ($con->errno) {
        die ("Connection error" . $con->error);
    } else {
        // echo "Successfully Connected to the database";
    }

    function getAllRecords()
    {
        global $con;

        $sql = "SELECT * FROM TBL_USER";

        $result = $con->query($sql);

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    $records = getAllRecords();


    echo "<table border='1'>";
    echo "<tr><th><strong>Name</strong></th><th><strong>Qualification</strong></th><th><strong>Experience</strong></th></tr>";
    foreach ($records as $record) {

       
        echo "<tr><td>" . $record['name'] . "</td><td>" . $record['qualification'] . "</td><td>" . $record['experience'] . "</td></tr>";  

    }
    echo "</table>";

    ?>
</body>

</html>