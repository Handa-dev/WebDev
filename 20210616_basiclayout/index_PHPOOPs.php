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
<h3>Example 2: Use of var_dump($obj);</h3>
<?php  
class demo2  
{  
        private $a= "hello shivam";  
        public function display()  
        {  
        echo $this->a;  
        }  
}  
$obj = new demo2();  
    $obj->display();  
    var_dump($obj);  
?>  

<h2>ABSTRACT CLASS</h2>
An abstract class is a mix between an interface and a class. <br>
It can be define functionality as well as interface. <br>
Classes extending an abstract class must implement all of the abstract methods <br>
defined in the abstract class. <br>
An abstract class is declared the same way as classes with the addition of the 'abstract' keyword. <br>
<h3>Syntax</h3>
<?
abstract class MyAbstract  
{  
    //Methods  
} 
//And is attached to a class using the extends keyword.  
class Myclass extends MyAbstract  
{  
    //class methods  
}  
?>
<h2>Example 1</h2>
<?php  
abstract class a  
{  
abstract public function dis1();  
abstract public function dis2();  
}  
class b extends a  
{  
public function dis1()  
    {  
        echo "Hello Shivam<br>";  
    }  
    public function dis2()  
    {  
        echo "SSSIT";     
    }  
}  
$obj = new b();  
$obj->dis1();  
$obj->dis2();  
?>  
<h2>Example 2</h2>
<?php  
abstract class Animal  
{  
    public $name;  
    public $age;  
public function Describe()  
        {  
                return $this->name . ", " . $this->age . " years old";      
        }  
abstract public function Greet();  
    }  
class Dog extends Animal  
{  
public function Greet()  
        {  
                return "Woof!";      
        }  
      
        public function Describe()  
        {  
                return parent::Describe() . ", and I'm a dog!";      
        }  
}  
$animal = new Dog();  
$animal->name = "Bob";  
$animal->age = 7;  
echo $animal->Describe();  
echo $animal->Greet();  
?>  
<h2>Abstraction in PHP</h2>
Data Abstraction is the most important features of any OOPS programming language. <br>
It shows only useful information, remaining are hidden form the end user. <br>
Abstraction is the any representation of data in which the implementation details are hidden (abstracted). <br>
<h3>Example 1</h3>
<?php  
abstract class Animal1  
{  
public $name;  
public $age;  
public function Describe()  
{  
return $this->name . ", " . $this->age . " years old";      
        }  
abstract public function Greet();  
}  
class cat extends Animal  
{  
public function Greet()  
{  
return "Lion!";      
}  
public function Describe()  
{  
return parent::Describe() . ", and I'm a cat!";      
}  
}  
$animal1 = new cat();  
$animal1->name = "Seru";  
$animal1->age = 5;  
echo $animal->Describe();  
echo $animal->Greet();  
  
?>
<h2>Access Specifiers in PHP</h2>
There are 3 types of Access Specifiers available in PHP, Public, Private and Protected. <br>
Public - class members with this access modifier will be publicly accessible from anywhere, <br>
even from outside the scope of the class. <br>
Private - class members with this keyword will be accessed within the class itself. <br>
 It protects members from outside class access with the reference of the class instance. <br>
Protected - same as private, except by allowing subclasses to access protected superclass members. <br>

<h3>EXAMPLE 1: Public</h3>
<?php  
class demo3  
{  
public $name="Ajeet";  
    function see()  
    {  
            echo $this->name."<br/>";  
    }  
}  
class child extends demo3  
{  
    function show()  
    {  
        echo $this->name;  
    }  
}     
$obj= new child;  
echo $obj->name."<br/>";     
$obj->see();  
$obj->show();  
?>  





















