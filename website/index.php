<?php 
  include ("header.html");
  include ("database.php");
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <form name="loginForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <h2>Login page</h2>
    
    <label for="username">Username:</label>
    <input type="text" name="username" >

    <label for="password">Password:</label>
    <input type="password" name="password">

    <input type="submit" value="Login">
  </form>
</body>
</html>

<?php
  $username = $_POST["username"];
  $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (user, password) VALUES ('$username', '$password')";

  try {
    $result = mysqli_query($conn, $sql);
  } catch(mysqli_sql_exception) {
    echo "Err
    or registering User";
  }

  include ("footer.html");
  mysqli_close($conn);
?>