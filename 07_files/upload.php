<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body>
    <?php

    require "functions.php";
    $response = "";
    if(isset($_FILES['files'])){
        $response = uploadFiles($_FILES);
    }

    ?>


    <h1>File Upload</h1>

    <form action="" method="post" enctype="multipart/form-data">
        <h1>Choose Files to Upload</h1>
        <input type="file" name="files[]" multiple>
        <button type="submit" name="upload">Upload</button>
        <?php

        if ($response == "success") {
            ?>
            <p class="success">Files Uploaded Successfully</p>
        <?php
        } else {
            ?>
        <p class="error"> <?php echo $response; ?></p>
        <?php
        }
        ?>

        
    </form>


</body>

</html>