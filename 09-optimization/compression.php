<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Compression</title>
</head>
<body>
    <h1>File Compression</h1>
    
    <?php 
    
    $outFile = "movie.zip";

    // THIS CREATES A NEW INSTANCE OF BUILT-IN ZIPARCHIVE CLASS
    $zip = new ZipArchive();

    $zip->open($outFile, ZIPARCHIVE::CREATE);

    $zip->addFile("video1.txt");

    $zip->addFile("video2.txt");

    $zip->close();

    
    ?>
</body>
</html>