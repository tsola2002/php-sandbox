<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product File</title>
</head>

<body>
    <h1> Enter Your Product Details</h1>

    <form action="confirm.php" method="post">
        <div style="width: 30em;">
            <table border="0" align="center">
                <tr>
                    <td>
                        Product ID
                    </td>
                    <td>
                        <input type="text" name="ProductID" id="ProductID" />
                    </td>
                </tr>
                <tr>

                    <td>
                        Product Name </td>
                    <td> <input type="text" name="ProductName" id="ProductName" /> </td>
                </tr>
                <tr>
                    <td>Price </td>
                    <td><input type="text" name="Price" id="Price" /> </td>
                </tr>


                <tr>
                    <td><input type="submit" name="submitButton" id="submitButton" value="Submit" /></td>
                </tr>
            </table>
        </div>

    </form>

</body>

</html>