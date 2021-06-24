<?php
if(isset($_POST['numTable']))
{
    $tableFor=$_POST['numTable'];
    for($i=1; $i<=10; $i++)   
    {   
        echo $i*$tableFor;   
        echo '<br>';     
    }  
?>