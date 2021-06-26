<?php
//introduction to PHP Array
echo "PHP Array <br>
why? less code <br>
Adv? multiple values can be stored in one array
";
?>
<table>
    <tr>
        <td>Key:</td>
        <td>0</td>
        <td>1</td>
        <td>2</td>
    </tr>
    <tr>
        <td>Value:</td>
        <td>Shivam</td>
        <td>Terina</td>
        <td>Sukhbir</td>
    </tr>
</table>
<?php
$address=array("Terina","Shivam","Sukhbir"); //First Method to allocated value to array
echo "Address of $address[0],$address[1],$address[2] is in array variable address";
echo "<br>";
echo $address[1];
echo "<br>"; //Allocate Method to allocated value to array
$address[0]="Shivam";  $address[1]="Terina";  $address[2]="Sukhbir";  
echo "Persons are: $address[0], $address[1], and $address[2]"; 
echo "<br>"; //Allocate Method to allocated value to array
echo $address[1];
?>
<h2>Types of array</h2>
There are 3 types of array in PHP. <br>
<h3>Indexed Array</h3><br>
ex<br>
$season[0]="summer";   <br>
$season[1]="winter";   <br>
$season[2]="spring";  <br>
$season[3]="autumn";    <br>
<br>
<h3>Associative Array</h3><br>
We can associate name with each array elements in PHP using => symbol.<br>
<br>
<?php
// 1st method of assigning value
$salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");  
// 2nd method of assigning value
$salary["Sonoo"]="350000";  
$salary["John"]="450000";  
$salary["Kartik"]="200000";  
//example 
$salary=array("Sonoo"=>"350000","John"=>"450000","Kartik"=>"200000");    
echo "Sonoo salary: ".$salary["Sonoo"]."<br/>";  
echo "John salary: ".$salary["John"]."<br/>";  
echo "Kartik salary: ".$salary["Kartik"]."<br/>";  
echo "<br>";
echo $salary["Kartik"];
echo "<br>";
?>
<h3>Multidimensional Array</h3><br>
PHP multidimensional array is also known as array of arrays<br>
It allows you to store tabular data in an array.<br>
 PHP multidimensional array can be represented in the form of <br>
 matrix which is represented by row * column.<br>
<table>
    <tr>
        <td>ID:</td>
        <td>NAME</td>
        <td>Salary</td>
        
    </tr>
    <tr>
        <td>1</td>
        <td>Sonno</td>
        <td>400000</td>
    </tr>
    <tr>
        <td>2</td>
        <td>John</td>
        <td>500000</td>
    </tr>
    <tr>
        <td>3</td>
        <td>Rahul</td>
        <td>300000</td>
    </tr>
</table>
<br>
<?php
echo "Output of above via PHP<br>";
$emp = array  (  array(1,"sonoo",400000), array(2,"john",500000),  array(3,"rahul",300000)  );  

for ($row = 0; $row < 3; $row++) 
{  
    for ($col = 0; $col < 3; $col++) 
    {  
        echo $emp[$row][$col]."  ";  
    }  
echo "<br/>";  
}  
?>
<h2>PHP Array function</h2>
PHP provides various array functions to access and manipulate the elements of array. <br>
<h3>1st. array()</h3>
<?php    
$season=array("summer","winter","spring","autumn");    
echo "Season are: $season[0], $season[1], $season[2] and $season[3]";    
?> 
<h3>2) PHP array_change_key_case() function</h3>
<?php    
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000");    
print_r(array_change_key_case($salary,CASE_UPPER)); 
echo "<br>";
print_r(array_change_key_case($salary,CASE_LOWER));   
?>   
<h3>PHP array_chunk() function</h3>
PHP array_chunk() function splits array into chunks.<br>
By using array_chunk() method, you can divide array into many parts.
<br>
<?php    
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000","Shivam"=>"600000","Terina"=>"700000","Sukhbir"=>"1000");    
print_r(array_chunk($salary,2));   
?> 
<h3>PHP count() function</h3>
PHP count() function counts all elements in an array
<br>
<?php    
$salary=array("Sonoo"=>"550000","Vimal"=>"250000","Ratan"=>"200000","Shivam"=>"600000","Terina"=>"700000","Sukhbir"=>"1000");    
echo count($salary);
?>
<h3>PHP sort() function</h3>
PHP sort() function sorts all the elements in an array.
<br>
<?php    
$season=array("summer","winter","spring","autumn");    
sort($season);  
foreach( $season as $s )    
{    
  echo "$s<br />";    
}    
?>
<h3>6) PHP array_reverse() function</h3>
PHP array_reverse() function returns an array<br> containing elements in reversed order.
<br>
<?php    
$season=array("summer","winter","spring","autumn");    
$reverseseason=array_reverse($season);  
foreach( $reverseseason as $s )    
{    
  echo "$s<br />";    
}      
?> 
<h3>7) PHP array_search() function</h3>
PHP array_search() function searches the specified value in an array. <br> It returns key if search is successful.
<br>
<?php 
//mixed array_search ( mixed $needle , array $haystack [, bool $strict = false ] )     
$season=array("summer","winter","spring","autumn");    
$key=array_search("spring",$season);  
echo $key;    
?>   
<h3>8) PHP array_intersect() function</h3>
PHP array_intersect() function returns the intersection of two array. <br>
In other words, it returns the matching elements of two array.
<br>
<?php    
$name1=array("sonoo","john","vivek","smith");    
$name2=array("umesh","sonoo","kartik","smith");    
$name3=array_intersect($name1,$name2);  
foreach( $name3 as $n )    
{    
  echo "$n<br />";    
}   
?> 
//revisiong PHP foreach loop
<h2>PHP foreach loop</h2>
The foreach loop is used to traverse the array elements.<br> 
It works only on array and object. <br>
<b>It provides an easiest way to iterate the elements of an array.</b><br>
It will issue an error if you try to use it with the variables<br> 
of different datatype.<br>
The foreach loop works on elements basis rather than index. <br>
<br>
<img src="../20210616_basiclayout/includes/img/flowchart_foreach.png" alt="flowchart for foreach loop">
<br>
<?php  
    //declare array  
    $season = array ("Summer", "Winter", "Autumn", "Rainy");  
      
    //access array elements using foreach loop  
    foreach ($season as $element) {  
        echo "$element";  
        echo "</br>";  
    }  
?>  
<br>
PHP program to print associative array elements using foreach loop.
<br>
<?php
//declare array  
$employee = array (  
    "Name" => "Alex",  
    "Email" => "alex_jtp@gmail.com",  
    "Age" => 21,  
    "Gender" => "Male"  
);  
  
//display associative array element through foreach loop  
foreach ($employee as $key => $element) {  
    echo $key . " : " . $element;  
    echo "</br>";   
}  
?>
<br>
Using foreach to print Multi-dimensional array
<br>
<?php 
/*need further explaination 
    //declare multi-dimensional array  
    $a = array();  
    $a[0][0] = "Alex";  
    $a[0][1] = "Bob";  
    $a[1][0] = "Camila";  
    $a[1][1] = "Denial";  
      
    //display multi-dimensional array elements through foreach loop  
    foreach ($a as $e1) {  
        foreach ($e1 as $e2) {  
            echo "$e2<br>";  
        }  
    }
    */  
?>  
<br>
Dynamic Array
<br>
<?php  
    //dynamic array  
    foreach (array ('j', 'a', 'v', 'a') as $elements) 
    {  
        echo "$elements<br>";
    }  
?>  