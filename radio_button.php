<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Radio Button Exercise</title>
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
  <form name="radioForm" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <input type="radio" name="visa" value="Visa">  <!-- same name to select just one option per time -->
    Visa<br>

    <input type="radio" name="visa" value="MasterCard">
    MasterCard<br>

    <input type="radio" name="visa" value="American Express">
    American Express<br><br>

    <input type="submit" name="confirm" value="Confirm">
    <br><br>

    <input type="checkbox" name="visa" value="American Express">
    American Express<br>

  </form>

  <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      if (isset($_POST["confirm"])) {
        if (isset($_POST["visa"])) {
          $option = $_POST["visa"];
          echo "<div class = result>{$option}</div>";
        } else {
            echo "Please select a payment method.";
          }
        } 
      }
  ?>
</body>

</html>

