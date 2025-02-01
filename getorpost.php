<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
    <form action="getorpost.php" method = "post">
        <label>quantity: </label><br>
        <input type="text" name="quantity">
        <input type="submit" value="total">
    </form>
</body>
</html>
<?php
    //$_POST = Sensitive information
    //         
    //$_GET = Not sensitive information
    //        Ideal para requisições idempotentes (sem efeitos colaterais)
    $item = "pizza";
    $price = 5.99;
    $quantity = $_POST["quantity"];
    $total = $quantity * $price;

    echo "You have ordered {$quantity} {$item}" , ($quantity > 1 ? "s" : ""), "<br>";
    echo "Your order is equal to \${$total} ", ($total > 1 ? "dolars": "dolar");
?>