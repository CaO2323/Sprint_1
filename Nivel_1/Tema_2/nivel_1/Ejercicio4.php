<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4</title>
</head>
<body>
    <header>
        <h1>Exercise 4</h1>
        <p>Write a program that implements a function that counts up to a certain number.<br>
           If a specific number is not included, the number must default to 10.<br>
           In addition, this function must have a second parameter that indicates<br>
           how much to count from (From 1 to 1, from 2 in 2...).<br>
           The account must be displayed step by step.</p>
    </header>
<?php

function counter($jump = 1, $lastNumber = 10){

    for ($i = 0; $i <= $lastNumber; $i += $jump){
        echo $i  . "<br>";
    }
}
counter(2);

?>
</body>
</html>