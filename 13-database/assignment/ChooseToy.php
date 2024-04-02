<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">

    <script type="text/javascript">
        function fun1() {
            var str1 = document.getElementById("ToyName").value.toString();
            if (str1 == 'Select') {
                alert('Please select the toy name');
                return false;
            }

            return true;
        }
    </script>
</head>

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

        <?php

        $hostname = 'localhost';
        $dbname = 'GlobalToyz';
        $username = 'root';
        $password = 'root';

        echo "<form action='Retrieve.PHP' method='POST'>";
        $conn = new mysqli($hostname, $username, $password, $dbname);

            // 2. test connection for errors
        if ($conn->errno) {
            die ("Connection error" . $con->error);
        } else {
            //echo "Successfully Connected to the database";
        }


        $query = "select vToyName, mToyRate from toys";

        $result = $conn->query($query);

        $selectbox = 'Please select the toy name: <select name=\'ToyName\' id=\'ToyName\' position:absolute;>   <option value="Select">Select</option>';

        foreach($result as $results) {
            $selectbox .= '<option value="' . $results['vToyName'] . "-" . $results['mToyRate'] . '">' . $results['vToyName']. "-" . $results['mToyRate'] . '</option>';

        }

        $selectbox .= '</select>';

        //mysql_free_result($result);
        
        echo $selectbox;
        echo "<br> <br>";
        echo "<input type='Submit' name='Submit' value='Submit' onclick='return fun1()'/>";

        ?>
    </center>
</body>

</html>