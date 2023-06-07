<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio3</title>
</head>
<body>
    <header>
        <h1>Ejercicio3</h1>
    </header>
        <section>
        <p> a) Declare two variables X and Y of integer type,
            two variables N and M (double) and assign each one a value. 
            Show by screen-display for X and Y.</p>
                <ul>Then value of each variable
                    <Li>The sum</Li>
                    <li>The subtract</li>
                    <li>The multiply</li>
                    <li>The module</li>
                </ul>
                <ul>
                <p>For N and M you will do the same.<br>
                For all variables(X,Y,N,M,)</p>
                    <li>The double of each variable.</li>
                    <li>The sum of all variables.</li>
                    <li>The product of all variables.</li>
                </ul>
        <p>b) Create a calculator function that enters two nunmbers 
              per parameter and in a third parameter allows you to add, 
              subtract, multiply or divide the two nunmbers.</p>
        </section>
        <p>a) Solution</p>
<ul>
<?php
//Declare and print variables
$x = 3;
$y = 5; 
$n = 3.75;
$m = 2.22;

echo "X equivale a: " . $x . " e Y equivale a: " . $y . "<br>";

//The sum,subtract, product, multiply; 
echo "The sum of X + Y is equal to: " . $x + $y . "<br>";
echo "The subtract of X + Y is equal to: " . $x - $y . "<br>"; 
echo "The multiply of X + Y is equal to: " . $x * $y . "<br>";
echo "The module of X + Y is equal to: " . $x % $y . "<br>";

//The same with n & m ;
echo "The sum of N + M is equal to: " . $n + $m . "<br>";
echo "The subtract of N + M is equal to: " . $n - $m . "<br>"; 
echo "The multiply of N + M is equal to: " . $n * $m . "<br>";
echo "The module of N + M is equal to: " . $n % $m . "<br>";

//The double of each variable
echo "The double of X is: " . $x * 2 . "<br>";
echo "The double of Y is: " . $y * 2 . "<br>";
echo "The double of N is: " . $n * 2 . "<br>";
echo "The double of M is: " . $m * 2 . "<br>";

//The sum of all variables
echo "The sum of all variables is: " . ($x + $y + $n + $m) . "<br>";

//The product of all variables
echo "The product of all variables is; " . ($x * $y * $n * $m) . "<br>"; 


//a)Creating a calculator

function Calculator($n1, $n2, $oper)
{
    switch ($oper) {
        case '+':
            return $n1 + $n2;
        case '-':
            return $n1 - $n2;
        case 'x':
        case '*':
            return $n1 * $n2;
        case '/':
            if ($n2 != 0) {
                return ($n1 / $n2);
            } else {
                return "Math error";
            }
        default:
            return "Invalid operation";
    }
    return $n1;
    $oper;
    $n2;
}
echo Calculator(2, 0, "/");
?>
</ul>
</body>

</html>