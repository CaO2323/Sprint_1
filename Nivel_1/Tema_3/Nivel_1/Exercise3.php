<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>
<body>
    <header>
        <h1>Exercise 3</h1>
        <p>Create a function that receives as parameters an array of words and a character.<br>
           The function returns true if all the words in the array have the character passed as the second parameter.<br>
           For example:<br>
           If we have [“hello”, “Php”, “Html”] it will return true if we ask for “h” but false if we ask for “l”.</p><br>
    </header>
    <?php
        //Creating an array 
        checkwords (["hello", "php", "html"], 'h');
        //Creating a function that contains two parámeters, swords and char
        function checkwords($words, $char) {
            //Declaring variables and a foreach statement
            $result = true;
            foreach ($words as $word){ //foreach 
                if(!str_contains($word, $char)){ //If not contain char result false  
                    $result = false;  
            }  
        } 
            if ($result){ //if result is True else false
                echo "True";
            }else{
                echo "False";
            }
        }
      ?>
</body>
</html>