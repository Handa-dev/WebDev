<?php  
   session_start();  
  
   if (!isset($_SESSION['counter'])) 
   {  
      $_SESSION['counter'] = 1;  
   } else {  
      $_SESSION['counter']++;  
   }  
   echo ("Page Views: ".$_SESSION['counter']);  

   if ($_SESSION['counter']=='5')
   {
    session_destroy();  // session will destroy after 5 views
   }
?>  