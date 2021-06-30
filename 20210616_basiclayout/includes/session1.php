<?php  
session_start();  //used to start the session
?>  
<html>  
<body>  
<?php  
$_SESSION["user"] = "Sachin";  
echo "Session information are set successfully.<br/>";  
?>  
<a href="session2.php">Visit next page</a>  
</body>  
</html>  