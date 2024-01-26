<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Interest Calculator</title>
</head>
<body>
    <h1>Interest Calculator</h1>
    <?php 
    
    $principal = 500000;
    $rate = 11;
    $t1 = 3;
    $t2 = 5;
    $t3 = 7;

    $simpleInterest1 = ($principal * $rate * $t1) / 100;
    $simpleInterest2 = ($principal * $rate * $t2) / 100;
    $simpleInterest3 = ($principal * $rate * $t3) / 100;

    ?>

<table border="1">
            <caption>Interest Calculated</caption>
            <tr>
                <th>Principal ($)</th>
                <th>Rate (%)</th>
                <th>Duration (Years)</th>
                <th>Interest ($)</th>

            </tr>
            <tr>
                <td><?php echo $principal; ?> </td>
                <td> <?php echo $rate; ?> </td>
                <td> <?php echo $t1; ?> </td>
                <td> <?php echo $simpleInterest1; ?> </td>
            </tr>

            <tr>
                <td><?php echo $principal; ?> </td>
                <td> <?php echo $rate; ?> </td>
                <td> <?php echo $t2; ?> </td>
                <td> <?php echo $simpleInterest2; ?> </td>
            </tr>
           
            <tr>
                <td><?php echo $principal; ?> </td>
                <td> <?php echo $rate; ?> </td>
                <td> <?php echo $t3; ?> </td>
                <td> <?php echo $simpleInterest3; ?> </td>
            </tr>

        </table>
</body>
</html>