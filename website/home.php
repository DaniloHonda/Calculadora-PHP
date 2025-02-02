<?php
  include ("header.html");
  setcookie("fav_food", "pizza", time() + (86400 * 30), "/");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home</title>
</head>
<body>
  This is my homepage <br>
  Homepage stuff here <br>
</body>
</html>

<?php
  include ("footer.html");
?>
