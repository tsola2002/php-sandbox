<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movie Time Inc</title>
</head>
<body bgColor=#f2dbdb>
    <?php
    // if any for value has been submitted 
    if ($_POST) {
        // set the form fields the superglobal key names
        $count = 0;
        $mname = $_POST["movieName"];
        $age = (int) $_POST["age"];
        $eval = $_POST["email_id"];
        $feedback = $_POST["feedback"];
        $parea = $_POST["area_code"];
        $pval = $_POST["phone"];
    
        if (strlen($mname) <= 0 || strlen($age) <= 0 || strlen($eval) <= 0 || strlen($feedback) <= 0 || strlen($parea) <= 0 || strlen($pval) <= 0) {
            $count = 1;
            echo "<p><font color='red'>Please provide values for all the fields</font></p>";
            exit;
        }
        if ($age < 18 || $age > 80) {
            $count = 1;
            echo "<p><font color='red'>Invalid age</font></p>";
        }
        if (strpos($eval, '@') <= 0 || strpos($eval, '.') < strpos($eval, '@')) {
            $count = 1;
            echo "<p><font color='red'>Invalid email ID</font></p>";
        }
        if(strlen($parea)!=3)
        {
            $count = 1;
            echo "<p><font color='red'>Area code should be equal to 3 digits</font></p>";
        }
        if (strlen($pval) < 7 || strlen($pval)>7) {
            $count = 1;
            echo "<p><font color='red'>Phone number should be equal to 7 digits</font></p>";
        }
        if (strlen($parea) > 0) {
            for ($i = 0; $i < strlen($parea); $i++) {
                $val = ord($parea[$i]);
                if ($val < 48 || $val > 57) {
                    $count = 1;
                    echo "<p><font color='red'>Invalid area code</font></p>";
                     break;
                }
            }
        }
        if (strlen($pval) == 7) {
            for ($i = 0; $i < strlen($pval); $i++) {
                $val = ord($pval[$i]);
                if ($val < 48 || $val > 57) {
                    $count = 1;
                    echo "<p><font color='red'>Invalid phone number</font></p>";
                    break;
                }
            }
        }
        if ($count == 0) {
            $phone = array($parea, $pval);
            $phn = implode("-", $phone);
            Display($phn);
        }
    }

    
    function Display($phone) {
        echo "Thanks for the feedback. We will update you about special offers on " . $phone;
    }
    ?>


    <h2>
        <center> 
            <font color=brown size=6 face=algerian id="idDemo">
                Feedback
            </font>
        </center>
    </h2>

    <form action="validate.php" method="POST">
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
                    <input type="text" name="email_id"  style="width:220" />
                </p>
                <p>
                    Feedback:
                    <textarea name="feedback" style="width:220"></textarea>
                </p>
                
                <p>
                    Phone Number
                    <input type="text" name="area_code"  style="width:40" /> -
                    <input type="text" name="phone"  style="width:170" />
                </p>
                <p><input type="submit" id="submitfeedback" value="Submit Feedback" /></p>
    </form>
</body>
</html>