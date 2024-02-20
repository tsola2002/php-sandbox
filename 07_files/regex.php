<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regular Expressions</title>
</head>
<body>
    <h1>Regular Expressions</h1>

    <?php 
        // 1. search our string to see if we have certain characters
        $subject = "My name is shola. shola is my name";
        $numbers = "1244456789";
        $word = "shape";
        $email = "@";



       if(preg_match("/john/", $subject)){
            echo "Success: it is match" . "<br>";
       } else {
            echo "Failure: it is not a match" . "<br>";
       }

       if(preg_match("/^shp/", $word)){
        echo "Success: numbers is a match" . "<br>";
        } else {
                echo "Failure: numbers is not a match" . "<br>";
        }

        if(preg_match("/^shp/", $word)){
            echo "Success: numbers is a match" . "<br>";
            } else {
                    echo "Failure: numbers is not a match" . "<br>";
            }

            if(preg_match("/s+/", $word)){
                echo "Success: s is a match" . "<br>";
                } else {
                        echo "Failure: s is not a match" . "<br>";
                }  
            
                if(preg_match("/s./", $word)){
                    echo "Success: s is a match" . "<br>";
                    } else {
                            echo "Failure: s is not a match" . "<br>";
                    }  
            
                    if(preg_match("/q|z/", $word)){
                        echo "Success: or is a match" . "<br>";
                        } else 
                    {
                                echo "Failure: or is not a match" . "<br>";
                    }
                    
                    if(preg_match("/\W\D/", $email)){
                        echo "Success: non-word character is a match" . "<br>";
                        } else {
                                echo "Failure: non-word character is not a match" . "<br>";
                        }  

                        if(preg_match("/4{3}/", $numbers)){
                            echo "Success: occurence is a match" . "<br>";
                            } else {
                                    echo "Failure: occurence character is not a match" . "<br>";
                            }          
        
            // 2. using preg_replace to preg_replace to replace certain strings
            $new_string = "John";
            $replaced = preg_replace("/shola/", $new_string, $subject);
            echo $replaced . "<br>";
        
    
    ?>
    
</body>
</html>