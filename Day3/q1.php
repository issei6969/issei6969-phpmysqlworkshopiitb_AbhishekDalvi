
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MARKSHEET Generator</title>
</head>
<body>
    <h4>Enter Your Details :</h4>
    <form action="q1.php" method="post">
        Enter Student's Name: <input type="text" name="name" required><br>
        <h4>Enter Student's marks out of 100 for each subject</h4>
        Subject 1: <input type="number" name="sub1" required><br>
        Subject 2: <input type="number" name="sub2" required><br>
        Subject 3: <input type="number" name="sub3" required><br>
        Subject 4: <input type="number" name="sub4" required><br>
        Subject 5: <input type="number" name="sub5" required><br>
        <input type="submit">
    </form>
    <hr>
</body>
</html>

<?php

$name = @$_POST["name"];
$sub1 = @$_POST["sub1"];
$sub2 = @$_POST["sub2"];
$sub3 = @$_POST["sub3"];
$sub4 = @$_POST["sub4"];
$sub5 = @$_POST["sub5"];

$total=($sub1+$sub2+$sub3+$sub4+$sub5);
$percent=($sub1+$sub2+$sub3+$sub4+$sub5)/500 *100;

$connect=mysqli_connect("localhost","root","") or die(mysql_error());

mysqli_select_db($connect,"result") or die("ERROR");

$write=mysqli_query($connect,"Insert into class1 values('','$name','$sub1','$sub2','$sub3','$sub4','$sub5','$total','500','$percent')") or die(mysqli_error($connect));




if($name)
{
    echo "<h4>GENERATED REPORT</h4>";
    echo "Subject Marks : <br>";
    echo "Subject 1 : ".$sub1."<br>";
    echo "Subject 2 : ".$sub2."<br>";
    echo "Subject 3 : ".$sub3."<br>";
    echo "Subject 4 : ".$sub4."<br>";
    echo "Subject 5 : ".$sub4."<br>";
	echo "Total Marks Obtained : ".$total."<br>";
	echo "Total Marks: 500 <br>";
	echo "Percentage:".$percent."%";
}
?>