<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Manipulation</title>
</head>
<body>
    <h1>File Manipulation</h1>

    <?php 

    //  1. this code creates a new file document
    //  if (touch("words.txt")) {
    //    echo "A file was created";
    //  } else {
    //    echo "there was an arror creating the file";
    // }

    // 1b doing the same thing using fopen
    // $data = "Adding new data to a file \r\n";    
    // $handler = fopen("file-3.txt","a");
    // writes information to the file
    // fwrite($handler, $data);
    // fwrite($handler,"Another line of text \r\n");
    // closes the file stream
    // fclose($handler);


    // 2. this code creates and adds information to a file
    //$data = "sample information for our new file \r\n";
    //file_put_contents("file-2.txt", $data);
    //file_put_contents("file-2.txt", "we are adding a second line \r\n", FILE_APPEND);
    // outputs the size of the file in bytes
    // echo file_put_contents("file-2.txt", "we are adding a second line \r\n", FILE_APPEND);


    // 3. how to read data from a file using fopen
    // $handler = fopen("file-3.txt","r");
    // $content = fread($handler, filesize("file-3.txt"));
    // fclose($handler);
    // display contents of the file
    // echo $content;


    // 4. reads the contents of a file
    // $content = file_get_contents("file-3.txt");
    // echo nl2br($content);


    // 5. deletes a file from the file system

    if(unlink("file-2.txt")){
        echo "Succes: File Has been deleted";
    } else {
        echo "Failure: File has not been deleted";
    }

    ?>
</body>
</html>