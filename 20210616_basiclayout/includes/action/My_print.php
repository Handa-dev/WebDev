<?php

if(isset($_POST['patternId']))
{
    
    if(isset($_POST['s']))
    {
    	   $i=$_POST['patternId'];
        $s=$_POST['s'];
        $j=1;
            for($k=1;$k<=$i;$k++) 
            {       
                for($j=1;$j<=$k;$j++)
                {
                    echo "$s";
                }
              echo "<br>";
            }
    }
    else
    {
        echo "hi";
       
        echo $l=$_POST['patternId'];
        //$s=$_POST['s'];
        $m=1;
            for($k=1;$k<=$l;$k++) 
            {       
                for($m=1;$m<=$k;$m++)
                {
                    echo "$m";
                }
              echo "<br>";
            }

    }
}

/*
if(isset($_POST['s']))
{
    $s=$_POST['s'];
    $j=1;
    for($k=1;$k<=$i;$k++) 
    {
        for($j=1;$j<=$k;$j++)
        {
            echo "$s";
        }
      
        echo "<br>";
    }

}
*/
?>

