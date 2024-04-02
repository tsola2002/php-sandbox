<html>

<body>





    <center>
        <div style="width: 750px; height:100px; background-color:cadetblue; ">
            <b>
                <center>
                    <font style="font-family: Arial, Helvetica, sans-serif;" size="+8" color="#FFFFFF">GlobalToyz</font>
                </center>
            </b>
        </div>
    </center>
    <center>
        <br><br>

        <?php

        $hostname = 'localhost';
        $dbname = 'GlobalToyz';
        $username = 'root';
        $password = 'root';


        $conn = new mysqli($hostname, $username, $password, $dbname);
        
            // 2. test connection for errors
            if ($conn->errno) {
                die ("Connection error" . $con->error);
            } else {
                //echo "Successfully Connected to the database";
            }

        

        $query = "select t.vToyName, b.cBrandName, mToyRate from toys as t Join toybrand as b
on t.cBrandId=b.cBrandId and vToyName='$_POST[ToyName]'";



        $result = $conn->query($query);



        foreach($result as $results) {
            echo "<table border='1' align='center'><tr> <th> ToyName</th><th>ToyBrand</th><th>ToyRate ($)</th><tr><td>" . $results['vToyName'] . "</td><td>" . $results['cBrandName'] . "</td><td>" . $results['mToyRate'] . "</td></tr>";
        }

        ?>
    </center>
</body>

</html>