
<?php
    $a=array(array(1,2),array(1,7));
    $b=array(array(1,1),array(2,3));
    echo "Matrix Addition <br>";
    for($i=0;$i<2;$i++)
    {
        for($j=0;$j<2;$j++)
        {
            echo $a[$i][$j]+$b[$i][$j]." ";
        }
        echo "<br>";
    }
?>