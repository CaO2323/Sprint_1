<?php 
class Cat implements Animal{
    //Declare a public attribute name
    public $name;

    //Implementing Interface 
    public function makeSound(){
        return "Mau!!!";
    }

}
?>