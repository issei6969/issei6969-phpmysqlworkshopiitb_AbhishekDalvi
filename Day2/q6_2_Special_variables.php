<html>
<body>
 
<?php

 echo "Name of Student:";
 echo $_POST["name"]."<br>";
 echo "Marks in Each Subject<br>";
 echo "Subject 1: ".$_POST["sub3"]."<br>";
 echo "Subject 2: ".$_POST["sub2"]."<br>";
 echo "Subject 3: ".$_POST["sub4"]."<br>";
 echo "Subject 4: ".$_POST["sub5"]."<br>";
 echo "Subject 5: ".$_POST["sub1"]."<br>";
 echo "Total Marks Obtained: ".($_POST["sub1"] + $_POST["sub2"] + $_POST["sub3"] + $_POST["sub4"] + $_POST["sub5"])."<br>";
 echo "Total Marks: ".($_POST["sub1"] + $_POST["sub2"] + $_POST["sub3"] + $_POST["sub4"] + $_POST["sub5"])."<br>";
 
 $percentage = (($_POST["sub1"] + $_POST["sub2"] + $_POST["sub3"] + $_POST["sub4"] + $_POST["sub5"]) / 500) * 100;
 echo "Percentage: ".$percentage."%";
 
?>

</body>
</html>