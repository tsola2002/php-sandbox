<html>

<body>
    <form action="StoreDetails.php" method="post">



    <div style="width: 30em;">

            <h2 align="center"> Enter Item Details </h2>


            <table border="0" align="center">
                <tr>
                    <td>
                        Select Item Category</td>
                    <td> <select name="ItemCategory" id="ItemCategory">
                            <option value="Men">Men</option>
                            <option value="Women">Women</option>
                        </select></td>
                </tr>
                <tr>
                    <td>
                        Item Name</td>
                    <td> <input type="text" name="ItemName" id="ItemName" /></td>
                </tr>
                <td>
                    Number of Units </td>
                <td><input type="text" name="No_of_units" id="No_of_units" /></td>
                <tr>
                    <td>
                        Price ($)</td>
                    <td><input type="text" name="Price" id="Price" /></td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="submitButton" id="submitButton" value="Submit" />
                    </td>
                </tr>
            </table>

        </div>
    </form>
</body>

</html>