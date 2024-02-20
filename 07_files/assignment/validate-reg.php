<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preg Validate</title>
</head>

<body>
    <h1>Validation using regular</h1>

    <?php

    if ($_POST) {
        $count = 0;
        $mname = $_POST["movieName"];
        $age = (int) $_POST["age"];
        $email = $_POST["email_id"];
        $feedback = $_POST["feedback"];
        $phone = $_POST['phone'];


        // doing mandatory checks
        if (strlen($mname) <= 0 || strlen($age) <= 0 || strlen($email) <= 0 || strlen($feedback) <= 0 || strlen($phone) <= 0 ) {
            $count = 1;
            echo "<p><font color='red'>Please provide values for all the fields</font></p>";
            exit;
        }

        // validation to see that the user is between age 18 and 80
        if ($age < 18 || $age > 80) {
            $count = 1;
            echo "<p><font color='red'>Invalid age</font></p>";
        }

        // \S any non whitespace character then @ sign 
        if(!preg_match('/^\S+@\S+\.\S+$/', $email)){
            $count = 1;
            echo "<p><font color='red'>Invalid email ID</font></p>";
        }

        // validating the phone number
        if(!preg_match('/^\d{3}-\d{3}-\d{4}$/', $phone)){
            $count = 1;
            echo "<p><font color='red'>Invalid phone number</font></p>";
        }

        if ($count == 0) {
            Display($phone);
        }






    }



    function Display($phone)
    {
        echo "Thanks for the feedback. We will update you about special offers on " . $phone;
    }
    ?>


    <form action="validate-reg.php" method="POST">
        <p>
            Enter movie name:
            <input type="text" style="width:220" name="movieName" />
        </p>
        <p>
            Enter age:
            <input type="text" name="age" style="width:220" />
        </p>
        <p>
            Enter E-mail:
            <input type="text" name="email_id" style="width:220" />
        </p>
        <p>
            Feedback:
            <textarea name="feedback" style="width:220"></textarea>
        </p>

        <p>
            Phone Number
            <input type="text" name="phone" style="width:170" />
        </p>
        <p><input type="submit" id="submitfeedback" value="Submit Feedback" /></p>
    </form>

</body>

</html>