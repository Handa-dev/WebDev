<?php

//$i=$_POST['patternId'];
if(isset($_POST['patternId']) && !empty($_POST['patternId']))
{
    if(isset($_POST['symbolId']) && !empty($_POST['symbolId']))
    {
        $i=$_POST['patternId'];
        $s=$_POST['symbolId']; // for printing the symbol
        $j=1;
    //exit;
        for($k=1;$k<=$i;$k++) 
        {
            //echo $j;
            //exit;
        
            for($j=1;$j<=$k;$j++)
            {
                echo "$s";
            }
            echo "<br>";
        }
    }
    else
    {
        $i=$_POST['patternId'];
        $j=1;
        for($k=1;$k<=$i;$k++) 
        {     
            for($j=1;$j<=$k;$j++)
            {
                echo "$j";
            }
            echo "<br>";
        }
    }
}
 else
    {
    echo "Go Back and Fill form";
    }
    ?>
    
    
