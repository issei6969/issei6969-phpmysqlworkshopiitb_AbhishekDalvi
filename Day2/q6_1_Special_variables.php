<html>
<body>
 
<?php

 if($_POST["side_1"]==$_POST["side_2"] and $_POST["side_2"]==$_POST["side_3"] and $_POST["side_1"]==$_POST["side_3"])
 {
     echo "It is an Equilateral Triangle.";
 }
 
 else if($_POST["side_1"]==$_POST["side_2"] or $_POST["side_2"]==$_POST["side_3"] or $_POST["side_3"]==$_POST["side_1"])
 {
     echo "It is an Isosceles Triangle.";
 }
 
 else{
     echo "It is an Scalene Triangle.";
 }

?>

</body>
</html>