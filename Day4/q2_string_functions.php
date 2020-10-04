<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String Functions</title>
</head>

<body>
    <form action="q2_string_functions.php" method="POST">
        Enter a String :<input type="text" name="string">
        <br><input type="submit" name="submit" value="SUBMIT">
    </form>
</body>

</html>

<?php

if (@$_POST['submit']) {

    $string = @$_POST['string'];
    echo "Your Entered String : " . $string . "<br><br><br>";
    echo "<b>Operations Performed : </b><br>";
    echo "1.Length of String is: " . strlen($string)."<br>";
    $sarray = explode(" ", $string);
    echo "2.Converted String to array:(";
    foreach ($sarray as $key => $value) {
        echo " '" . $value . "' ";
    }
    echo ")";
    echo "<br>";
    echo "3.Reversed String is: " . strrev($string)."<br>";
    echo "4.All characters to Lower C0ase: " . strtolower($string)."<br>";
    echo "5.All characters to Upper Case: " . strtoupper($string)."<br>";

    $sub = mb_substr($string, 0, 3);
    echo "6.Replacing Substring " . $sub . "from main stream to stars : " . str_replace($sub, "****" ,$string)."<br>";
}

?>