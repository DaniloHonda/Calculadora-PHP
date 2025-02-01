<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SAKA</title>
  <style>
    body {
      font-family: 'Times New Roman', Times, serif;
      background-color: #121212; /* Fundo escuro */
      margin: 0;
      padding: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      color: #ffffff; /* Texto branco */
    }

    form {
      background-color: #1e1e1e; /* Fundo escuro para o formulário */
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra mais escura */
      width: 300px;
      text-align: center;
    }

    label {
      font-size: 20px;
      margin-bottom: 10px;
      display: block;
      color: #ffffff; /* Texto branco */
    }

    input[type="text"] {
      width: 80%;
      padding: 8px;
      margin: 8px 0 20px 0;
      border: 1px solid #333; /* Borda mais escura */
      border-radius: 20px;
      background-color: #333; /* Fundo escuro para o input */
      color: #ffffff; /* Texto branco */
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
      font-size: 18px;
      font-weight: bold;
      color: #4CAF50; /* Cor verde para o resultado */
      padding: 15px;
      background-color: #1e1e1e; /* Fundo escuro para o resultado */
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra mais escura */
      text-align: center;
    }

    .error {
      color: #ff4444; /* Vermelho para erros */
      font-size: 16px;
      margin-top: 20px;
      background-color: #1e1e1e; /* Fundo escuro para o erro */
      padding: 15px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Sombra mais escura */
      text-align: center;
    }
  </style>
</head>

<body>
  <form name="diameterForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label>Diameter:</label>
    <input type="text" name="d" required>

    <input type="submit" value="Calculate">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $d = $_POST['d'];

    $pi = null;
    $radius = null;
    $circunference = null;
    $area = null;
    $volume = null;

    if ($d > 0 && is_numeric($d)) {
      $pi = pi();
      $radius = $d / 2;
      $circunference = round(2 * $pi * $radius, 2);
      $area = round($pi * pow($radius, 2), 2);
      $volume = round((4 / 3) * $pi * pow($radius, 3), 2);

      echo "<div class='result'>";
      echo "Circumference = " . $circunference . "<br>";
      echo "Area = " . $area . "<br>";
      echo "Volume = " . $volume;
      echo "</div>";
    } else {
      echo "<div class='error'>Please enter a valid positive number!</div>";
    }
  }
  ?>
</body>

</html>