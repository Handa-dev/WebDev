<?php
if(isset($_POST['patternId']))
{
    $i=$_POST['patternId'];
    $j=1;
    //exit;
    for($k=1;$k<=$i;$k++) 
    {
        //echo $j;
        //exit;
        
        for($j=1;$j<=$k;$j++)
        {
            echo "$j";
        }
      
    echo "<br>";
    }
}
?>
