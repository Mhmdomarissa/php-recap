<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index1.php" method="post">
        <label>quantity : </label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="total">


    </form>

    
</body>
</html>
<?php
$item = "pizza";
$price = 4.99;
$quantity = $_POST["quantity"];
$total = null ;
$total = $price * $quantity;

echo "you have ordered {$quantity} and {$item} for sale";
echo "<br> your total is \$ {$total}"









?>