<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6</title>
</head>
<body>
    <header>
        <h1>Exercise 6</h1>
        <p>Charlie bit my finger! Charlie will bite your finger exactly 50% of the time.<br>
           Write the isBitten() function that returns TRUE with 50% probability and FALSE otherwise.<br>
           important Tip: You might find the rand() function useful.</p>
    </header>
</body>
<?php
 
function isBitten() {
    return rand(0,1);
}
echo isBitten() ? 'TRUE': 'FALSE';

?>
</html>