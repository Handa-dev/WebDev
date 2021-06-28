<?php
//PHP Functions


?>
<h1>PHP function </h1>
<p>
PHP function is a piece of code that can be reused many times.<br> It can take input as argument list and return value. There are thousands of built-in functions in PHP.
</p>
<h2>Advantage of PHP Functions</h2>
<b>Code Reusability:</b>PHP functions are defined only once and can be invoked many times, <br>
like in other programming languages.<br>

<b>Less Code:</b> It saves a lot of code because you don't need to write the logic many times. <br>
By the use of function, you can write the logic only once and reuse it.<br>

<b>Easy to understand:</b> PHP functions separate the programming logic.<br> 
So it is easier to understand the flow of the application because every logic is divided in the form of functions.<br>
<h2>Syntax</h2>
function functionname(){  <br>
//code to be executed  
}  <br>
<h3>example1</h3>
<?php  
//example1
function sayHello(){  
echo "Hello PHP Function";  
}  
//calling functions
sayHello();
?>

<h2>PHP Function Arguments</h2>
<p>
We can pass the information in PHP function through arguments which is separated by comma.<br>
PHP supports Call by Value (default), Call by Reference, <br>
Default argument values and Variable-length argument list.<br>
<h3>example2</h3>
<?php  
function sayHello1($name)
{  
echo "Hello $name<br/>";  
}  
sayHello1("Sonoo");  
echo"<br>";
sayHello1("Vimal");  
echo"<br>";
sayHello1("John");  
?>
<h3>example3- sumFun</h3>
<?php
function sumFun($num1,$num2)
{
    $num3=$num1+$num2;
    echo "$num3<br/>";
}
$num1=9222229;
$num2=1990;
sumFun($num1,$num2);
?>
<h2>PHP Call By Reference</h2>
<p>
Value passed to the function doesn't modify the actual value by default (call by value). <br>But we can do so by passing value as a reference.
to pass value as a reference, you need to use <b>ampersand (&) </b>symbol before the argument name<br>
</p>
<h3>example4- function call by reference</h3>
<?php
function adder(&$shiv)  
{  
    $shiv .= 'Call By Reference</b>';  
}  

$str = 'Hello ';  
adder($str);  
echo $str; 
?>
<h2>PHP Function: Default Argument Value</h2>
We can specify a default argument value in function.
<h3>example5a- function call by reference</h3>
<?php  
function sayHello2($name="Sonoo"){  
echo "Hello $name<br/>";  
}
sayHello2("shiv");  
sayHello2(); //calling default argument value
?>
<h3>example5b- function call by reference</h3>
<?php  
function increment(&$i)  
{  
    $i++;  
}  
$i = 10;  
increment($i);  
echo $i;  
?>  
<h2>PHP Function: Returning Value</h2>
<h3>example6- Check Using return below</h3>
<?php  
function cube($n){  
return $n*$n*$n;  
}  
echo "Cube of 3 is: ".cube(3);  
?>  
<h2>PHP Function: Returning Value</h2>
<p>
PHP Parameterized functions are the functions with parameters. <br>
You can pass any number of parameters inside a function. <br>
These passed parameters act as variables inside your function.
</p>
<?php  
        //Adding two numbers  
         function add($x, $y) {  
            $sum = $x + $y;  
            echo "Sum of two numbers is = $sum <br><br>";  
         }   
         add(467, 943);  
  
         //Subtracting two numbers  
         function sub($x, $y) {  
            $diff = $x - $y;  
            echo "Difference between two numbers is = $diff";  
         }   
         sub(943, 467);  
      ?>  
<h3>Addition and Subtraction with Dynamic number</h3>
In this example, we have passed two parameters $x and $y inside two functions add() and sub().
<?php  
//add() function with two parameter  
function add1($x,$y)    
{  
$sum=$x+$y;  
echo "Sum = $sum <br><br>";  
}  
//sub() function with two parameter  
function sub1($x,$y)    
{  
$sub=$x-$y;  
echo "Diff = $sub <br><br>";  
}  
//call function, get  two argument through input box and click on add or sub button  
if(isset($_POST['add']))  
{  
//call add() function  
 add1($_POST['first'],$_POST['second']);  
}     
if(isset($_POST['sub']))  
{  
//call add() function  
sub1($_POST['first'],$_POST['second']);  
}  
?>  
<form method="post">  
Enter first number: <input type="number" name="first"/><br><br>  
Enter second number: <input type="number" name="second"/><br><br>  
<input type="submit" name="add" value="ADDITION"/>  
<input type="submit" name="sub" value="SUBTRACTION"/>  
</form>     
