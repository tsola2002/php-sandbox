<?php 

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';

    if($_POST){

        // storing post variables from the form
        $errMsg = "";
        $CN = $_POST["CandidateName"];
        $Email = $_POST["EmailID"];
        $IntvD = $_POST["InterviewDate"];
        $errMsg = "";

        // validation checks
        if (empty($CN)) {
            $errMsg.="Please provide name.<br>";
        }

        if (empty($Email)){
            $errMsg.="Please provide Email ID.<br>";
        }

        if (empty($Intvd)){
            $errMsg.="Please provide interview date.<br>";
        }

        if (!empty($errMsg)) {
            $mail = new PHPMailer(true);

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'omatsolasobotie@gmail.com';
            $mail->Password = 'zohkxltgcikqejhe';
            $mail->SMTPSecure = 'ssl';
            $mail->Port = 465;

            $mail->setFrom('tsola2002@yahoo.co.uk');

            $mail->addAddress("tsola2002@yahoo.co.uk");

            $mail->isHTML(true);

            $mail->Subject = "INTERVIEW DETAILS";

            $mail->Body = '
                <html>
                <head>
                <title>Interview Details for June, 2012</title>
                </head>
                <body>
                <p>Here are the name of candidates and interview details for June, 2012</p>
                <table>
                <tr>
                <th>Candidate Name</th><th>Email ID</th><th>Interview Date</th><th>Feedback</th>
                </tr>
                <tr>
                <td>' . $_POST["CandidateName"] . '</td><td>' . $_POST["EmailID"] . '</td><td> ' . $_POST["InterviewDate"] . '</td><td>
                </tr>
                </table>
                </body>
                </html>';

            $mail->send();    

           // $to = 'DepartmentHead@TeleShope.com';
           // $subject = 'Interview Details';

           // $headers = 'MIME-Version: 1.0' . "\r\n";
           // $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        } else {
            echo $errMsg;
        }

    }


?>