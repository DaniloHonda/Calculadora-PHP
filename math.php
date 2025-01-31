<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAKA</title>
</head>
<body>
    <form action="math.php" method="post">
      <label>x:</label>
      <input type="text" name="x">
      <input type="submit" value="total">
</body>
</html>
<?php
  $x = $_POST['x'];

  echo "<br><br>", $x;
?>