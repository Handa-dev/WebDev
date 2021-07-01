<h1>PHP File Upload</h1>
PHP allows you to upload single and multiple files through few lines of code only. <br>
PHP file upload features allows you to upload binary and text files both. <br>
Moreover, you can have the full control over the file to be uploaded through PHP <br>
authentication and file operation functions. <br>
<h2>PHP $_FILES</h2>
The PHP global $_FILES contains all the information of file. <br>
By the help of $_FILES global, we can <br>
get file name, <br>
file type, <br>
file size, <br>
temp file name and <br>
errors associated with file. <br>
<h3>$_FILES['filename']['name']</h3>
returns file name. <br>
<h3>$_FILES['filename']['type']</h3>
returns MIME type of the file.
<h3>$_FILES['filename']['size']</h3>
returns size of the file (in bytes).
<h3>$_FILES['filename']['tmp_name']</h3>
returns temporary file name of the file which was stored on the server.
<h3>$_FILES['filename']['error']</h3>
returns error code associated with this file.
<h3>move_uploaded_file() function</h3>
The move_uploaded_file() function moves the uploaded file to a new location.  <br>
The move_uploaded_file() function checks internally if the file is uploaded thorough the POST request.  <br>
It moves the file if it is uploaded through the POST request. <br>
<h3>example</h3>
<li> <a href="../20210616_basiclayout/includes/uploadform.html">uploadform.html</a> </li>
<?php

?>