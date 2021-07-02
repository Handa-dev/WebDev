<h2>PHP Download File</h2>
PHP enables you to download file easily using built-in readfile() function. <br>
The readfile() function reads a file and writes it to the output buffer. <br>
<h3>PHP readfile() function</h3>
The readfile() function reads a file and writes it to the output buffer. <br>
<h4>Syntax</h4>
int readfile ( string $filename [, bool $use_include_path = false [, resource $context ]] )  


$filename: represents the file name

$use_include_path: it is the optional parameter.
It is by default false. 
You can set it to true to the search the file in the included_path.

$context: represents the context stream resource.

int: it returns the number of bytes read from the file.
<!--Need further investigation -->

<h5> File: download1.php</h5>
<?php  
$file_url = 'https://www.checkpte.com/';  
header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: utf-8");   
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
readfile($file_url);  
?>  
<h5>PHP Download File Example: Binary File File: ; download2.php</h5>

<?php  

$file_url = 'http://www.myremoteserver.com/file.exe';  
header('Content-Type: application/octet-stream');  
header("Content-Transfer-Encoding: Binary");   
header("Content-disposition: attachment; filename=\"" . basename($file_url) . "\"");   
readfile($file_url);  
?>  