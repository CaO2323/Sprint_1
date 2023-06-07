<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise_2</title>
</head>
<body>
    <header>
        <h1>Exercise_2</h1>
        <p>Imagine that we are in a store that sells:<br>
           Chocolate: 1 euro<br>
           Chewing gum: 0.50 euros<br>
           Candies: 1.50 euros<br>
           Implement a program that allows calculations to be added <br>
           to a purchase total of this type. For example, what if we buy:<br>
           2 chocolates, 1 chewing gum and 1 candy, let's have a program that <br>
           allows us to add the subtotals to a total, so that:<br>
           function(2 chocolates) + function(1 chewing gum) + function(1 caramel) = 2 + 0.5 + 1.5<br>
           Therefore, the total is 4.</p>
    </header>
    <?php   
        function calculateTotalAmount($chocolates, $chewingGums, $candy) {
            $chocolatePrice = 1.00;
            $chewingGumPrice = 0.50;
            $candiesPrice = 1.50;

            $chocolateCost = ($chocolates * $chocolatePrice);
            $chewingGumCost = ($chewingGums * $chewingGumPrice);
            $candyCost = ($candy * $candiesPrice);

            $totalAmount = $chocolateCost + $chewingGumCost + $candyCost;
            return $totalAmount;
        }

        $chocolates = 2;
        $chewingGums = 1;
        $candies = 1;
     
        $totalAmount = calculateTotalAmount($chocolates, $chewingGums, $candies);
        echo "Total amount to pay: " . $totalAmount . " euros";
    ?>
</body>
</body>
</html>