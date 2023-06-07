<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <header>
        <h1>Exercise 5</h1>
        <ul>Write a function to verify a student's grade according to the grade.
            Conditions:
            <li>If the mark is 60% or more, the degree should be First Division.</li>
            <li>If the grade is between 45% and 59%, the degree should be Second Division.</li>
            <li>If the grade is between 33% and 44%, the grade should be Third Division.</li>
            <li>If the grade is less than 33%, the student will fail.</li>
        </ul>
    </header>
    
<?php
echo "<pre>";
$nota = 32;
$max = 100;

$notaFinal = $nota/$max;

notas();
function notas(){
    global $nota, $max;
    $notaFinal = ($nota/$max)*100;

if ($nota >= 60) {

    echo "Enhorabuena estas en Primera División ";

}else if(($nota>=45) && ($nota <=59)){

    echo "Estás en Segunda División";

}else if(($nota >=33) && ($nota <=44)){

    echo "Estás en Tercera División";
}else{

echo "A Junio o Septiempre";
}
  
}

echo "</pre>";
?>
</body>
</html>