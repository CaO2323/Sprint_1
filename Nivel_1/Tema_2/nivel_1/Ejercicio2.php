<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio2</title>
</head>
<body>
    <header>
        <h1>Exercise 2</h1>
        <p>Print on screen <strong>Hello World!!!</strong></p>
    </header>
    <section>
        <ul>
            <li>Transfoms all the characters of the string to uppercase and print the size(length) on the screen</li>
            <li>Print the size(length) of the variable on the screen.</li>
            <li>Print the string in reverse characater order.</li>
            <li>Create a new varible with the content "This is the PHP course." and print to the screen the concatenation of both strings</li>
        </ul>
    </section>
<ul>
    <?php
    //Creating Variable Hello World and printing
    $text = "Hello World!!! " ;
    echo $text . ".<br>";

    //Converting to uppercase
    $text = strtoupper($text);
    echo "To upperCase ---> " . $text . ".<br>";

    //Variable length
    echo "To length ----> " . strlen($text) . "<br>";

    //Reversing the String
    echo "To reversing ---> " . strrev($text) . "<br>";

    //Creating a new String

    $message = "This is the PHP course.";
    echo $message . "<br>";

    //Concatening both strings

    echo $text  . $message;
    ?>
</ul>
</body>
</html>