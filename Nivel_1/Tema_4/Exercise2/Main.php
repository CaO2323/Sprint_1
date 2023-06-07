<?php 
    //Calling Rectangle, Triangle y Shape to get its class;
    include 'Shape.php';
    include "Rectangle.php";
    include "Triangle.php";
    
    //Instance Rectangle;
    $rectangle = new Rectangle(5,3);
    //Calling Triangle;
    $triangle = new Triangle(2,3);
    //Printing areas;
    echo "Rectangle area: " . $rectangle-> area() . " units squared\n";
    echo "<br>" ;
    echo "Triangle area: " . $triangle->area() . " units squared\n"; 
  

    ?>