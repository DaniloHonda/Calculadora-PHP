<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Capitals Exercise</title>
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
      background-color:rgb(0, 132, 255);
      color: white;
      border: none;
      border-radius: 20px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color:rgb(3, 113, 216);
    }

    .result {
      font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
      margin-top: 20px;
      font-size: 18px;
      font-weight: bold;
      color:rgb(0, 132, 255); /* Cor verde para o resultado */
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
  <form name="cpitalForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <label>Country:</label>
    <input type="text" name="country" required>

    <input type="submit" value="Find Capital">
  </form>

  <?php
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $country = $_POST['country'];

    $capitals = array("usa"=>"Washington D.C.",
                      "japan"=>"Kyoto",
                      "germany"=>"Berlin",
                      "france"=>"Paris",
                      "india"=>"New Delhi",
                      "italy"=>"Rome",
                      "china"=>"Beijing",
                      "russia"=>"Moscow",
                      "uk"=>"London",
                      "australia"=>"Canberra",
                      "nigeria"=>"Abuja",
                      "argentina"=>"Buenos Aires",
                      "mexico"=>"Mexico City",
                      "canada"=>"Ottawa",
                      "peru"=>"Lima",
                      "colombia"=>"Bogotá",
                      "venezuela"=>"Caracas",
                      "ecuador"=>"Quito",
                      "bolivia"=>"La Paz",
                      "guatemala"=>"Guatemala City",
                      );

    $capital = strtolower($capitals[$country]); // Deixa minusculo para aceitar independente da resposta

    if (array_key_exists($country, $capitals)) {
      $capital = $capitals[$country];
      echo "<div class='result'>The capital is {$capital}</div>";
    } else {
      echo "<div class='error'>Country not found!</div>";
    }
  }
  ?>
</body>

</html>

