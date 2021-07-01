<h1>PHP file Handling</h1>
PHP File System allows us to <br>
- create file, <br>
- read file line by line, <br>
- read file character by character, <br>
- write file, <br>
- append file, <br>
- delete file <br>
- close file.<br>
<h2>PHP Open File - fopen()</h2>
The PHP fopen() function is used to open a file. <br>
<?php
$handle = fopen("C:\\xampp\\htdocs\\WebDev-1\\20210616_basiclayout\\myfile.txt", "r"); 
?>
<h2>PHP Close File - fclose()</h2>
The PHP fclose() function is used to close an open file pointer. <br>
<?php  
fclose($handle);  
?> 
<h2>PHP Read File - fread()</h2>
The PHP fread() function is used to read the content of the file. <br>
It accepts two arguments: resource and file size. <br>
Follow example shows how to get the content of an existing file <br>
<?php    
$filename = "C:\\xampp\\htdocs\\WebDev-1\\20210616_basiclayout\\myfile.txt";    
$handle = fopen($filename, "r");//open file in read mode    
$contents = fread($handle, filesize($filename));//read file    

echo $contents;//printing data of file  
fclose($handle);//close file    
?>    
<h2>PHP Write File - fwrite()</h2>
The PHP fwrite() function is used to write content of the string into file. <br>
<?php  
$fp = fopen('C:\\xampp\\htdocs\\WebDev-1\\20210616_basiclayout\\myfile.txt', 'w');//open file in write mode  
fwrite($fp, 'hello ');  
fwrite($fp, 'php file');  
fclose($fp);  
  
echo "File written successfully";  
?>  
<h2>PHP Delete File - unlink()</h2>
The PHP unlink() function is used to delete file. <br>
<?php    
unlink('C:\\xampp\\htdocs\\WebDev-1\\20210616_basiclayout\\myfile.txt');  
   
echo "File deleted successfully";  
?> 


