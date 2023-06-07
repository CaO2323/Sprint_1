<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>
<body>
    <header>
        <h1>Exercise 2</h1>
        <p>$X = array (10, 20, 30, 40, 50,60);<br>
        Display the size of the previous array and then remove<br>
        an element from the previous array.<br>
        After removing the element, the entire keys must be normalized (their indexes must be reorganized). <br>
        Display the size of the array one last time.</p>
    </header>

<?php
    $X = array (10, 20, 30, 40, 50, 60);
    echo '<br>';
    //Display the size of the array
    echo count($X); 
    echo "<br>";
    //Removing an element 4
    unset($X[4]);
    var_dump($X);
    //Creating a new array 
    $newX = [];
    echo "<br>";
     //Filling $newX with $X values;
    foreach ($X as $key => $value) {
        $newX[] = $value;
    }
    echo '<br>';
    //Reorganizing the index
    echo count($newX);
    echo'<br>';
    var_dump($newX);
?>
</body>
</html>