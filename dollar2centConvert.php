<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"/>
    <title>Dollars to Cents | Results</title>
</head>
<body>
<div class="container">
    <h1 class="text-center mt-5">Conversion Table</h1>
    
    <?php
    $dollar = $_POST['dollar'];
    $cents = $dollar * 100;
    $penny = $cents;
    $nickel = $cents / 5;
    $quarter = $cents / 25;
    $dime = $cents * 10;

    $real = $dollar * 5.31;  // date (20 - 06 - 2020)
    $brazilianCents = $real * 100;
    ?>

    <table class="table table-striped">
        <thead class="thead-dark">
            <tr>
                <th>Dollar</th>
                <th>Cents</th>
                <th>Pennies</th>
                <th>Nickels</th>
                <th>Quarters</th>
                <th>Dimes</th>
                <th>BR Real</th>
                <th>BT Cents</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th><?= $dollar; ?></th>
                <th><?= $cents; ?></th>
                <th><?= $penny; ?></th>
                <th><?= $nickel; ?></th>
                <th><?= $quarter; ?></th>
                <th><?= $dime; ?></th>
                <th><?= $real; ?></th>
                <th><?= $brazilianCents; ?></th>
            </tr>
        </tbody>
    </table>
</div>
</body>
</html>

