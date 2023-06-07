<?php 
            include "Exercise1.php";
            //Object Instance and  calling their Owns functions
            $emp1 = new Employee();
            $emp1 -> Initialize("Nani", 6000);
            $emp2 =new Employee();
            $emp2 -> Initialize("Sandy", 5999);
            //Print Method;
            $emp1 -> Print();
            $emp2 -> Print();


?>