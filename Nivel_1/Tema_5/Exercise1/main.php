<?php
require "Animal.php";
require "Dog.php";
require "Cat.php";
//Instantiating object Garfield and Milú and setting $name of both
$milu = new Dog;
$milu->name = "Milú";
$garfield= new Cat;
$garfield->name = "Garfield";

echo "Hi, my name is ". $milu->name ." and i do ".$milu->makeSound();
echo "<br>";
echo "Hi, my name is " . $garfield->name . " and i do ".$garfield->makeSound(); 



?>