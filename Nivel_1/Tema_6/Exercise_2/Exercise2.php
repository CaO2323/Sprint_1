
<!DOCTYPE html>
<html lang="en">
    <head><?php 
     session_start();
     // Bringing $name value
     $name = $_POST["name"];
     $_SESSION["username"] = $name;
     $username = $_SESSION["username"];

     $password = $_POST["password"];
     $_SESSION["password"] = $password;
     $password = $_SESSION["password"];

     $email = $_POST["email"];
     $_SESSION["email"] = $email;
     $email = $_SESSION["email"];
     
    ?>
        <title>Exercise 2/Login Form</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Comptible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <h1>Login form</h1>
        <p><?php
             echo $_POST['name'];
             echo $_POST['password'];
             echo $_POST['email'];?></p>
    </body>
</html>