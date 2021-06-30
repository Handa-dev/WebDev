<?php
include "../20210616_basiclayout/includes/header.php";
?>
<h1>PHP Math Functions</h1>
<p>
PHP provides many predefined math constants and functions that can be used to perform mathematical operations.
</p>
<h2>PHP Math: abs() function</h2>
Gives abosolute value of a number
<?php  
echo (abs(-7)."<br/>"); // 7 (integer)  
echo (abs(7)."<br/>"); //7 (integer)  
echo (abs(-7.2)."<br/>"); //7.2 (float/double)  
?> 
<h2>PHP Math: ceil() function</h2>
The ceil() function rounds fractions up.
<br>    
<?php  
echo (ceil(3.3)."<br/>");// 4  
echo (ceil(7.333)."<br/>");// 8  
echo (ceil(-4.8)."<br/>");// -4  
?> 
<h2>PHP Math: floor() function</h2>
The floor() function rounds fractions down.
<br>    
<?php  
echo (floor(3.3)."<br/>");// 3  
echo (floor(7.333)."<br/>");// 7  
echo (floor(-4.8)."<br/>");// -5  
?> 
<h2>PHP Math: sqrt() function</h2>
The sqrt() function returns square root of given argument.
<br>            
<?php  
echo (sqrt(16)."<br/>");// 4  
echo (sqrt(25)."<br/>");// 5  
echo (sqrt(7)."<br/>");// 2.6457513110646  
?>  
<h2>PHP Math: decbin() function</h2>
The decbin() function converts decimal number into binary. It returns binary number as a string.
<br>            
<?php  
echo (decbin(2)."<br/>");// 10  
echo (decbin(10)."<br/>");// 1010  
echo (decbin(22)."<br/>");// 10110  
?>   

<h2>PHP Math: decoct() function</h2>
The decoct() function converts decimal number into octal. It returns octal representation of given number as a string.<br>
<?php  
echo (decoct(2)."<br/>");// 2  
echo (decoct(10)."<br/>");// 12  
echo (decoct(22)."<br/>");// 26  


/*
abs()	It is used to find the absolute (positive) value of a number.
sin()	It is used to return the sine of a number.
sinh()	It is used to return the hyperbolic sine of a number.
asin()	It is used to find the arc sine of a number.
asinh()	It is used to find the inverse hyperbolic sine of a number.
cos()	It is used to find the cosine of a number.
cosh()	It is used to return the cosh of a number.
acos()	It is used to return the arc cosine of a number.
acosh()	It is used to return the inverse hyperbolic cosine of a number.
tan()	It is used to return the tangent of a number.
tanh()	It is used to return the hyperbolic tangent of a number.
atan()	It is used to return the arc tangent of a number in radians.
atan2()	It is used to return the arc tangent of two variables x and y.
atanh()	It is used to return the inverse hyperbolic tangent of a number.
base_convert()	It is used to convert a number from one number base to another.
bindec()	It is used to convert a binary number to a decimal number.
ceil()	It is used to find round a number up to the nearest integer.
pi()	It returns the approximation value of PI.
decbin()	It converts a decimal number to a binary number.
dechex()	It converts a decimal number to a hexadecimal number.
decoct()	It converts a decimal number to an octal number
deg2rad()	It converts a degree value to a radian value.
rad2deg()	It converts a radian value to a degree value.
exp()	It is used to calculate the exponent of e.
expm1()	It is used to return exp(x) - 1.
floor()	It converts round a number down to the nearest integer.
fmod()	It returns the remainder of x/y.
getrandmax()	It returns the largest possible value returned by rand().
hexadec()	It is used to convert a hexadecimal number to a decimal number.
hypot()	It is used to calculate the hypotenuse of a right-angle triangle.
is_finite()	To check whether a value is finite or not.
is_infinite()	It is used to check whether a value is infinite or not.
is_nan()	It is used to check whether a value is 'not-a-number'.
lcg_value()	It is used to return a pseudo random number in a range between 0 and 1.
log()	It is used to return the natural logarithm of a number.
log10()	It is used to return the base-10 logarithm of a number.
log1p()	It is used to return log(1+number).
max()	It is used to return the highest value in an array, or the highest value of several specified values.
min()	It returns the lowest value in an array, or the lowest value of several specified values.
getrandmax()	It is used to return the maximum value by using rand().
mt_getrandmax()	Returns the largest possible value returned by mt_rand().
mt_rand()	Generates a random integer using Mersenne Twister algorithm.
mt_srand()	Seeds the Mersenne Twister random number generator.
octdec()	It is used to converts an octal number to a decimal number.
pow()	It is used to return x raised to the power of y.
intdiv	It returns the integer quotient of the division of dividend by divisor.
rand()	It is used to generates a random integer.
round()	It is used to round a floating-point number.
fmod()	It is used to return the floating point remainder of the division of the argument.
sqrt()	It is used to return the square root of a number.

*/
?>