<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Weekly Earnings</title>

  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      background-color: #121212;
      /* Fundo escuro */
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #ffffff;
      /* Texto branco */
    }

    form {
      background-color: #1e1e1e;
      /* Fundo escuro para o formulário */
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* Sombra mais escura */
      width: 350px;
      text-align: center;
    }

    label {
      font-size: 30px;
      margin-bottom: 5px;
      display: block;
      color: #ffffff;
      /* Texto branco */
    }

    input[type="text"] {
      width: 80%;
      padding: 8px;
      margin: 8px 0 20px 0;
      border: 1px solid #333;
      /* Borda mais escura */
      border-radius: 20px;
      background-color: #333;
      /* Fundo escuro para o input */
      color: #ffffff;
      /* Texto branco */
    }

    input[type="submit"] {
      width: 90%;
      padding: 10px;
      background-color: #4CAF50;
      color: white;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #45a049;
    }

    .result {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      margin-top: 20px;
      font-size: 20px;
      font-weight: bold;
      color: #4CAF50;
      /* Cor verde para o resultado */
      padding: 15px;
      background-color: #1e1e1e;
      /* Fundo escuro para o resultado */
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* Sombra mais escura */
      text-align: center;
    }

    .error {
      color: #ff4444;
      /* Vermelho para erros */
      font-size: 16px;
      margin-top: 20px;
      background-color: #1e1e1e;
      /* Fundo escuro para o erro */
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* Sombra mais escura */
      text-align: center;
    }
  </style>
</head>

<body>
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" onsubmit="hideLabel()">
    <label for="h" id="hoursLabel">Hours worked:</label>
    <input type="text" name="h" id="h" required>

    <input type="submit" value="Submit">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $h = $_POST["h"];
    $weekly = null;
    $rate = 15;

    if (!empty($h) && is_numeric($h) && $h > 0) {
      $weekly = $h * $rate;
      echo "<div class='result'>You made \${$weekly} this week.</div>";
    } elseif ($h > 40) {
      $weekly = ($rate * 40) + (($h - 40) * ($rate * 1.5));
    } else {
      echo "<div class='result'>You made \$0 this week.</div>";
      //echo "<div class='error'>Please enter a valid number of hours worked (between 1 and 40).</div>";
    }
  }
  ?>
</body>

</html>