<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Exercise_1</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
        <header>
            <h1>Exercise_1</h1>
            <p>Write a function that determines the total amount to pay for a phone call<br>
               based on the following premises:<br>
               Any call that lasts less than 3 minutes costs 10 cents.<br>
               Each additional minute after the first 3 is a meter step and costs 5 cents.
            </p>
        </header>
        <?php 
        function calculateCallCost($callDuration) {
            $baseCost = 0.10; //less than 3 minutes
            $additionalCost = 0.5; //cost for each additional minute

            if($callDuration <= 3){
                return $baseCost;
            } else {
                $additionalMinutes = $callDuration - 3;
                $additionalCostTotal = $additionalMinutes * $additionalCost;
                $totalCost = $baseCost + $additionalCostTotal;
                return $totalCost;
            }

        }
        $callDuration = 5; // Duration of the phone call in minutes
        $totalAmount = calculateCallCost($callDuration);
        echo "Total amount to pay: $" . number_format($totalAmount, 2);
             ?>
    </body>
</html>
