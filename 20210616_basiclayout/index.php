<h1>PHP Include and Require</h1>
PHP allows us to create various elements and functions, which are used several times in many pages. It takes much time to script these functions in multiple pages. Therefore, use the concept of file inclusion that helps to include files in various programs and saves the effort of writing code multiple times.
<h2>Both include and require are identical to each other, except failure.</h2>
include only generates a warning, i.e., E_WARNING, and <b>continue</b> the execution of the script.
require generates a fatal error, i.e., E_COMPILE_ERROR, <b>and stop</b> the execution of the script.
<h2>Example</h2>
<a href="https://checkpte.com/faq.html">FAQ</a> |     
<a href="https://checkpte.com/">HOME</a> |     
<?php 
//include("index.php");
//exit;
 ?>  
<h1>PHP Cookie</h1>
PHP cookie is a small piece of information which is stored at client browser. <br>It is used to recognize the user.<br>
Cookie is created at server side and saved to client browser.<br>
 Each time when client sends request to the server, cookie is embedded with request.<br>
  Such way, cookie can be received at the server side.<br>
<b>cookies in php can be created, sent and received at server end.<b>
<h2>PHP setcookie() function</h2>
PHP setcookie() function is used to set cookie with HTTP response.<b>
Once cookie is set, you can access it by $_COOKIE superglobal variable.<b>
<?php  
setcookie("user", "Sonoo");  
?>  
 
<?php  
if(!isset($_COOKIE["user"])) {  
    echo "Sorry, cookie is not found!";  
} else {  
    echo "<br/>Cookie Value: " . $_COOKIE["user"];  
}  
?>  
<h1>PHP Session</h1>
PHP session is used to store and pass information from one page to another temporarily (until user close the website).

PHP session technique is widely used in shopping websites where we need to store and pass cart information e.g. username, product code, product name, product price etc from one page to another.

PHP session creates unique user id for each browser to recognize the user and avoid conflict between multiple browsers.
