<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style type="text/css" media="screen">
        .error{ color:red; }
</style>
<body>

    <?php 
    
     /* This script receives seven values from register.html:
        email, password, confirm, year, terms, color, submit */

        // Flag variable to track success: 
        $okay = true;
        
        // validate the email address
        if(empty($_POST['email'])) {
            print '<p class="error">Please enter your email address</p>';
            $okay = false;
        }

        // validate the email password
        if(empty($_POST['password'])) {
            print '<p class="error">Please enter your password</p>';
            $okay = false;
        }

        //if there were no errors print a success message
        if($okay){
            print '<p>You have been successfully registered</p>';
        }
    
    
    ?>
    
</body>
</html>