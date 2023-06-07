<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>
    <body>
    <header>
            <h1>Exercise 1</h1>
            <p>Define a variable of eache type:</p>
        </header>
        <section>
            <ul>
                <li>Integer</li>
                <li>Double</li>
                <li>String</li>
                <li>Boolean</li>
                <p>Print them by screen</p>
            </ul>
            <p>Then create a constant that includes your name and display it in title-by-screen format</p>
        </section>
<ul>
    <?php 

    //Define name --->String variable
    $name = "Nani";
    //Define age ---> Double variable 
    $age = 42.50;
    //Define year ---> Integer varible 
    $year = 1980;
    //Define student ---> Boolean variable
    $student = true;

    //Echo/Print statements
    echo "boolean: ". $student . "<br>";
    echo "Me llamo "  . $name . " y tengo " . $age. "años " . "<br> Nací en " .  $year . ".<br>";

    //Creating constant
    define("NAME", "Nani");
    echo NAME;

    //constant printed as title
    echo "<h1>".NAME."</h1>";
    ?>
</ul>
</body>
</html>