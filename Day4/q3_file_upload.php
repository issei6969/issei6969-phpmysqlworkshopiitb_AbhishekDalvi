<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>

<body onload="document.FormName.reset();">
    <form action="q3_file_upload.php" method="POST" enctype="multipart/form-data">
        <b>Choose the file to be Uploaded :</b><br><br>
        <input type="file" name="file">
        <br><br>
        <input type="submit" value="Upload" name="submit">
        <br><br>
    </form>
</body>

</html>
<?php

if (@$_POST['submit']) {
    echo "<b>--------------------DETAILS--------------------</b><br>";
    echo "FILE NAME : " . $_FILES["file"]["name"] . "<br>";
    echo "FILE TYPE : " . $_FILES["file"]["type"] . "<br>";
    echo "FILE SIZE : " . $_FILES["file"]["size"] . " bytes <br>";
}
$_FILES = 0;
?>