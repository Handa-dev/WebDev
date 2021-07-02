<h1>PHP WITH OOPS CONCEPT</h1>
Object-oriented programming is a programming model organized <br>
around Object rather than the actions and data  rather than logic. <br>
<h2>Class:</h2>
A class is an entity that determines how an object will behave and what the object will contain. <br>
In other words, it is a blueprint or a set of instruction to build a specific type of object. <br>
In PHP, declare a class using the class keyword, followed by the name of the class and a <br>
set of curly braces ({}). <br>
<h2>Syntax to Create Class in PHP</h2>
<?php  
/*
class MyClass  
    {  
        // Class properties and methods go here  
    }  
*/
?>  
<h2>Important note:</h2>
In PHP, to see the contents of the class, use var_dump(). <br>
The var_dump() function is used to display the structured information (type and value) <br>
about one or more variables. <br>

var_dump($obj);  
<br>
<h2>Object:</h2>
A class defines an individual instance of the data structure. <br>
We define a class once and then make many objects that belong to it. <br>
Objects are also known as an instance. <br>
An object is something that can perform a set of related activities. <br>
<?php  
class MyClass  
{  
        // Class properties and methods go here  
}  
$obj = new MyClass;  
var_dump($obj);  
?> 
<h2>Example of class and object:</h2>
<?php  
class demo  
{  
        private $a= "hello Shivam";  
        public function display()  
        {  
        echo $this->a;  
        }  
}  
$obj = new demo();  
$obj->display();  
?>  