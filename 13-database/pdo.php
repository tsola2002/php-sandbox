<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PDO PHP</title>
</head>
<body>
    <h1>PDO CONNECTION</h1>

    <?php

    $host = 'localhost';
    $database = 'DB_JOBERA';
    $username = 'root';
    $password = 'root';

    // connecting to our Database
    try {

        $dsn = "mysql:host=$host;dbname=$database";
        $con = new PDO($dsn, $username, $password);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "Connected Successfully";

    } catch (PDOException $e) {

        die("Connection Failed" . $e->getMessage());

    }

    // Read all records from the table
    function getAllRecords() {
        global $con;
        $sql = "SELECT * FROM TBL_USER";
        $stmt = $con->query($sql);

        return $stmt;
    }

    function createRecord($name, $qualification, $experience){
        global $con;

        $sql = "INSERT INTO TBL_USER (name, qualification, experience) VALUES ('$name', '$qualification', '$experience')";
        $stmt = $con->prepare($sql);

        return $stmt->execute();
    }

    function updateRecord($id, $name, $qualification, $experience)
    {
        global $con;
        $sql = "UPDATE TBL_USER SET
        name = '$name',
        qualification = '$qualification',
        experience = '$experience'
        WHERE userid = '$id'";

        $stmt = $con->prepare($sql);

        return $stmt->execute();
    }

    // USAGE SECTION

    // create a new record
    // createRecord('ADEKUNLE', 'PGDIP', 25);


    // updating
    updateRecord(1, "DAYO", "BSC", 4);

    // getting a records
    $records = getAllRecords();
    foreach($records as $record){
        echo "Name: " . $record['name'] . " Qualification: " . $record['qualification'] . " Experience: " . $record['experience'] . "<br>";
    }

    


    
    
    ?>
</body>
</html>