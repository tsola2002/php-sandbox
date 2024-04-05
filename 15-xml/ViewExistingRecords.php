<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Records</title>
</head>
<body>
    <h1>VIEW RECORDS</h1>
    <?php
        $i = $_REQUEST["record"];
        $xml = simplexml_load_string(file_get_contents("Orders.xml"));
        $max = sizeof($xml->Order)-1;

        try {
        echo "<table border=0 cellpadding=1 cellspacing=1>";
        echo "<tr>";
        echo "<td colspan=3><b><center>";
        echo "<h1>Record " . ($i + 1) . " of " . sizeof($xml->Order) . "</h1>";
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "Customer Name: ";
        echo "</td>";
        echo "<td>";
        echo "<input type=text value='" . $xml->Order[0]->CustomerName . "'>";
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "Address: ";
        echo "</td>";
        echo "<td>";
        echo "<input type=text value='" . $xml->Order[0]->Address . "'>";
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "Product Ordered: ";
        echo "</td>";
        echo "<td>";
        echo "<input type=text value='" . $xml->Order[0]->ProductOrdered . "'>";
        echo "</td>";
        echo "</tr>";

        echo "<tr>";
        echo "<td>";
        echo "No Of Items: ";
        echo "</td>";
        echo "<td>";
        echo "<input type=text value='" . $xml->Order[0]->NoOfItems . "'>";
        echo "</td>";
        echo "</tr>";

        echo "</table>";

    } catch (Exception $ex) {
        echo $ex->getMessage();
    }
    ?>
</body>
</html>