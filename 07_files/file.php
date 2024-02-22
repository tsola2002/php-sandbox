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
    // //display contents of the file
    // echo $content;
    

    // 4. reads the contents of a file
    // $content = file_get_contents("file-3.txt");
    // echo nl2br($content);
    

    // 5. deletes a file from the file system
    
    // if(unlink("file-2.txt")){
    //     echo "Succes: File Has been deleted";
    // } else {
    //     echo "Failure: File has not been deleted";
    // }
    
    // 6. using ftell function to view the file pointer
    // $handler = fopen("file-3.txt","r");
    // echo ftell($handler) . ' "' . fgets($handler) . '" ' . ftell($handler) . PHP_EOL;
    // fclose($handler);
    
    // 13. changing file permissions using chmod
    // $file = 'file-3.txt';
    // Read and write for owner, read for everybody else
    // chmod($file, 0600);

    // 7. 
    // $resource = "file-3.txt";
    // echo "is readable: " . is_readable($resource) . "<br>";
    // echo "is writable: " .is_writable($resource). "<br>";
    // echo "is executable: " . is_executable($resource). "<br>";
    
    // 8. create a directory
    //mkdir('demo-folder');
    // $directory_name = "demo-folder";
    // echo "is it a directory: " . is_dir("demo-folder") . "<br>";
    
    // 9. removing a directory 
    //rmdir('demo-folder');
    
    // 10. making a copy of a file
    //echo "Has file-3.txt been copied: " . copy("file-3.txt", "new-file-3.txt") . "<br>";
    
    // 11. renaming a file
    //rename("file-3.txt", "renamed-file.txt");
    
    // 12. locking a file
    //$file = 'new-file-3.txt'; // File to lock
    
    // Open the file for writing
    // $fp = fopen($file, 'w');
    
    // if (flock($fp, LOCK_EX)) { // Acquire an exclusive lock
    //     echo "File locked successfully.\n";
    
    //     ftruncate($fp, 0);      // truncate file
    //     fwrite($fp, "Write something as a pointer here\n");
    //     fflush($fp);            // flush output before releasing the lock
    
    //     // Perform operations on the locked file here
    
    //     // Release the lock
    //     flock($fp, LOCK_UN);
    //    // echo "Lock released.\n";
    // } else {
    //     echo "File is already locked by another process.\n";
    // }
    
    // // Close the file
    // fclose($fp);
    





    ?>
</body>

</html>