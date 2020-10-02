<?php

error_reporting(0);
$connect = mysqli_connect("localhost","root","");
mysqli_select_db($connect,"result") or die("ERROR");
if ($connect) {
$extract = mysqli_query($connect,"SELECT * FROM class1 WHERE name='Rohan'");
while ($row = mysqli_fetch_assoc($extract)) {
$m1 = $row["sub1"];
$m2 = $row["sub2"];
$m3 = $row["sub3"];
$m4 = $row["sub4"];
$m5 = 99;
$newname = $row["name"];
$newtotal = $m1+$m2+$m3+$m4+$m5;
$newpercent = ($newtotal / 500 ) * 100 ;

mysqli_query($connect,
"UPDATE class1  SET sub5='$m5' , totalobtained = '$newtotal' , percent = '$newpercent' WHERE name= '$newname' "
);
}
echo "<h2>New Changes are Done</h2>";
}

 ?>