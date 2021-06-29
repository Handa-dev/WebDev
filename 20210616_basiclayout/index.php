<body>
<?php
include "../20210616_basiclayout/includes/header.php";
?>
<h1>Intro PHP String</h1>
<p>
PHP string is a sequence of characters i.e., used to store and manipulate text. <br>
PHP supports only 256-character set and so that it does not offer native Unicode support. <br>
There are 4 ways to specify a string literal in PHP.
</p>    
<h2>Example1. Single Quoted</h2>
<?php  
       $str='Hello text within single quote';  
       echo $str;  
?> 
<h2>Example2. Single Quoted multiple lines</h2>
<?php  
$str1='Hello text   
multiple line  
text within single quoted string';  
$str2='Using double "quote" directly inside single quoted string';  
$str3='Using escape sequences \n in single quoted string';  
echo "$str1 <br/> $str2 <br/> $str3";  
?>  
<h2>Example3. Single Quoted backslash (\) </h2>
<?php  
$num1=10;   
$str1='trying variable $num1';  
$str2='trying backslash n and backslash t inside single quoted string \n \t';  
$str3='Using single quote \'my quote\' and \\backslash';  
$str4='Using single quote \'my quote\' and \\backslash';  

echo "$str1 <br/> $str2 <br/> $str3";  
?>
<h2>Example4. Double Quoted backslash (\) </h2> 
<?php  
$str="Hello text within double quote";  
echo $str;  
?>  
Now, you <b>can't</b> use double quote directly inside double quoted string.
<h2>Example5 can't use double quote directly</h2> 
<?php  
$str1="Using double \"quote\" directly inside double quoted string";  
echo $str1;  
?>
We can store multiple line text, special characters and escape sequences in a double quoted PHP string.
<h2>Example6. Store multiple lines using double quote </h2> 
<?php  
$str1="Hello text   
multiple line  
text within double quoted string";  
$str2="Using double \"quote\" with backslash inside double quoted string";  
$str3="Using escape sequences \n in double quoted string";  
echo "$str1 <br/> $str2 <br/> $str3";  
?>  
In double quoted strings, <b>variable will be interpreted.</b>
<h2>Example7. value interpret using double quote </h2> 
<?php  
$num1=10;   
echo "Number is: $num1";  
?>  
<h1>Heredoc *needs research</h1>
Heredoc syntax (<<<) is the third way to delimit strings.<br>
<b>Naming Rules</b>
The identifier should follow the naming rule that it must contain only alphanumeric characters <br>
and underscores, and must start with an underscore or a non-digit character.
<h2>Example8. Heredoc  </h2> 
<?php  
/*
    $city = 'Delhi';  
    $str = <<<DEMO  
Hello! My name is Misthi, and I live in $city.  
DEMO;  
    echo $str;  
*/
 ?>   
<h1>String Functions</h1>
<h2>1) PHP strtolower() function</h2>
<?php  
$str="My name is KHAN";  
$str=strtolower($str);  
echo $str;  
?>  
<h2>2) PHP strtoupper() function</h2>
<?php  
$str="My name is KHAN";  
$str=strtoupper($str);  
echo $str;  
?>  
<h2>3) PHP ucfirst() function</h2>
The ucfirst() function returns string converting first character into uppercase.<br>
 It doesn't change the case of other characters. <br>
<?php  
$str="my name is KHAN";  
$str=ucfirst($str);  
echo $str;  
?>  
<h2>4) PHP lcfirst() function</h2>
The lcfirst() function returns string<br>
 converting first character into lowercase. It doesn't change the case of other characters. <br>
 <?php  
$str="MY name IS KHAN";  
$str=lcfirst($str);  
echo $str;  
?>
<h2>5) PHP ucwords() function</h2>  
The ucwords() function returns string converting first character of <b>each word</b> into uppercase.<br>
<?php  
$str="my name is Sonoo jaiswal";  
$str=ucwords($str);  
echo $str;  
?>  
<h2>6) PHP strrev() function</h2>
The strrev() function returns reversed string. <br>
<?php  
$str="my name is Sonoo jaiswal";  
$str=strrev($str);  
echo $str;  
?>  
<h2>7) PHP strlen() function</h2>
The strlen() function returns length of the string.<br>
<?php  
$str="my name is Sonoo jaiswal";  
$str=strlen($str);  
echo $str;  
?>  
<?php
/*
addcslashes()	It is used to return a string with backslashes.
addslashes()	It is used to return a string with backslashes.
bin2hex()	It is used to converts a string of ASCII characters to hexadecimal values.
chop()	It removes whitespace or other characters from the right end of a string
chr()	It is used to return a character from a specified ASCII value.
chunk_split()	It is used to split a string into a series of smaller parts.
convert_cyr_string()	It is used to convert a string from one Cyrillic character-set to another.
convert_uudecode()	It is used to decode a uuencoded string.
convert_uuencode()	It is used to encode a string using the uuencode algorithm.
count_chars()	It is used to return information about characters used in a string.
crc32()	It is used to calculate a 32-bit CRC for a string.
crypt()	It is used to create hashing string One-way.
echo()	It is used for output one or more strings.
explode()	It is used to break a string into an array.
fprint()	It is used to write a formatted string to a stream.
get_html_translation_table()	Returns translation table which is used by htmlspecialchars() and htmlentities().
hebrev()	It is used to convert Hebrew text to visual text.
hebrevc()	It is used to convert Hebrew text to visual text and new lines (\n) into <br>.
hex2bin()	It is used to convert string of hexadecimal values to ASCII characters.
htmlentities()	It is used to convert character to HTML entities.
html_entity_decode()	It is used to convert HTML entities to characters.
htmlspecialchars()	Converts the special characters to html entities.
htmlspecialchars_decode()	Converts the html entities back to special characters.
Implode()	It is used to return a string from the elements of an array.
Join()	It is the Alias of implode() function.
Levenshtein()	It is used to return the Levenshtein distance between two strings.
Lcfirst()	It is used to convert the first character of a string to lowercase.
localeconv()	Get numeric formatting information
ltrim()	It is used to remove whitespace from the left side of a string.
md5()	It is used to calculate the MD5 hash of a string.
md5_files()	It is used to calculate MD5 hash of a file.
metaphone()	It is used to calculate the metaphone key of a string.
money_format()	It is used to return a string formatted as a currency string.
nl2br()	It is used to insert HTML line breaks in front of each newline in a string.
nl_langinfo()	Query language and locale information
number_format()	It is used to format a number with grouped thousands.
ord()	It is used to return ASCII value of the first character of a string.
parse_str()	It is used to parse a query string into variables.
print()	It is used for output one or more strings.
printf()	It is used to show output as a formatted string.
quoted_printable_decode()	Converts quoted-printable string to an 8-bit string
quoted_printable_encode()	Converts the 8-bit string back to quoted-printable string
quotemeta()	Quote meta characters
rtrim()	It is used to remove whitespace from the right side of a string.
setlocale()	It is used to set locale information.
sha1()	It is used to return the SHA-1 hash of a string.
sha1_file()	It is used to return the SHA-1 hash of a file.
similar_text()	It is used to compare the similarity between two strings.
Soundex()	It is is used to calculate the soundex key of a string.
sprintf()	Return a formatted string
sscanf()	It is used to parse input from a string according to a format.
strcasecmp()	It is used to compare two strings.
strchr()	It is used to find the first occurrence of a string inside another string.
strcmp()	Binary safe string comparison (case-sensitive)
strcoll()	Locale based binary comparison(case-sensitive)
strcspn()	It is used to reverses a string.
stripcslashes()	It is used to unquote a string quoted with addcslashes().
stripos()	It is used to return the position of the first occurrence of a string inside another string.
stristr()	Case-insensitive strstr
strlen()	It is used to return the length of a string.
strncasecmp()	Binary safe case-insensitive string comparison
strnatcasecmp()	It is used for case-insensitive comparison of two strings using a "natural order" algorithm
strnatcmp()	It is used for case-sensitive comparison of two strings using a "natural order" algorithm
strncmp()	It is used to compare of the first n characters.
strpbrk()	It is used to search a string for any of a set of characters.
strripos()	It finds the position of the last occurrence of a case-insensitive substring in a string.
strrpos()	It finds the length of the last occurrence of a substring in a string.
strpos()	It is used to return the position of the first occurrence of a string inside another string.
strrchr()	It is used to find the last occurrence of a string inside another string.
strrev()	It is used to reverse a string.
strspn()	Find the initial length of the initial segment of the string
strstr()	Find the occurrence of a string.
strtok()	Splits the string into smaller strings
strtolower()	Convert the string in lowercase
strtoupper()	Convert the strings in uppercase
strtr()	Translate certain characters in a string or replace the substring
str_getcsv()	It is used to parse a CSV string into an array.
str_ireplace()	It is used to replace some characters in a string (case-insensitive).
str_pad()	It is used to pad a string to a new length.
str_repeat()	It is used to repeat a string a specified number of times.
str_replace()	It replaces all occurrences of the search string with the replacement string.
str_rot13()	It is used to perform the ROT13 encoding on a string.
str_shuffle()	It is used to randomly shuffle all characters in a string.
str_split()	It is used to split a string into an array.
strcoll()	It is locale based string comparison.
strip_tags()	It is used to strip HTML and PHP tags from a string.
str_word_count()	It is used to count the number of words in a string.
substr()	Return the part of a string
substr_compare()	Compares two strings from an offset up to the length of characters. (Binary safe comparison)
substr_count()	Count the number of times occurrence of a substring
substr_replace()	Replace some part of a string with another substring
trim()	Remove whitespace or other characters from the beginning and end of the string.
ucfirst()	Make the first character of the string to uppercase
ucwords()	Make the first character of each word in a string to uppercase
vfprintf()	Write a formatted string to a stream
vprintf()	Display the output as a formatted string according to format
vsprintf()	It returns a formatted string
wordwrap()	Wraps a string to a given number of characters

*/
?>
</body>
</html>
