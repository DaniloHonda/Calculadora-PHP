<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Realista em PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .calculator {
            background-color: #2c3e50;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
            width: 300px;
            text-align: center;
        }
        .display {
            background-color: #34495e;
            color: #fff;
            font-size: 24px;
            padding: 15px;
            border-radius: 10px;
            margin-bottom: 20px;
            text-align: right;
            box-shadow: inset 0 0 5px rgba(0, 0, 0, 0.3);
            min-height: 30px;
            word-wrap: break-word;
        }
        .buttons {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 10px;
        }
        .buttons button {
            background-color: #34495e;
            color: #fff;
            font-size: 18px;
            padding: 20px;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            box-shadow: 0 4px #1a252f;
            transition: background-color 0.2s, box-shadow 0.2s;
        }
        .buttons button:active {
            box-shadow: 0 2px #1a252f;
            transform: translateY(2px);
        }
        .buttons button.operator {
            background-color: #e67e22;
            box-shadow: 0 4px #d35400;
        }
        .buttons button.operator:active {
            box-shadow: 0 2px #d35400;
        }
        .buttons button.equal {
            background-color: #27ae60;
            box-shadow: 0 4px #219653;
            grid-column: span 4;
        }
        .buttons button.equal:active {
            box-shadow: 0 2px #219653;
        }
        .buttons button.clear {
            background-color: #e74c3c;
            box-shadow: 0 4px #c0392b;
            grid-column: span 2;
        }
        .buttons button.clear:active {
            box-shadow: 0 2px #c0392b;
        }
    </style>
</head>
<body>
    <div class="calculator">
        <form method="post" action="">
            <div class="display" id="display">
                <?php
                if (isset($_POST['display'])) {
                    echo htmlspecialchars($_POST['display']);
                } else {
                    echo '0';
                }
                ?>
            </div>
            <div class="buttons">
                <button type="button" onclick="appendToDisplay('7')">7</button>
                <button type="button" onclick="appendToDisplay('8')">8</button>
                <button type="button" onclick="appendToDisplay('9')">9</button>
                <button type="button" class="operator" onclick="appendToDisplay('+')">+</button>
                <button type="button" onclick="appendToDisplay('4')">4</button>
                <button type="button" onclick="appendToDisplay('5')">5</button>
                <button type="button" onclick="appendToDisplay('6')">6</button>
                <button type="button" class="operator" onclick="appendToDisplay('-')">-</button>
                <button type="button" onclick="appendToDisplay('1')">1</button>
                <button type="button" onclick="appendToDisplay('2')">2</button>
                <button type="button" onclick="appendToDisplay('3')">3</button>
                <button type="button" class="operator" onclick="appendToDisplay('*')">*</button>
                <button type="button" onclick="appendToDisplay('0')">0</button>
                <button type="button" onclick="appendToDisplay('.')">.</button>
                <button type="button" class="clear" onclick="clearDisplay()">C</button>
                <button type="button" class="operator" onclick="appendToDisplay('/')">/</button>
                <button type="submit" class="equal" name="calculate">=</button>
            </div>
            <input type="hidden" name="display" id="hiddenDisplay">
        </form>
    </div>

    <?php
    if (isset($_POST['calculate'])) {
        $expression = $_POST['display'];
        $result = '';

        // Verifica se a expressão é válida
        if (!empty($expression)) {
            try {
                // Usa a função eval para calcular a expressão
                eval('$result = ' . $expression . ';');
            } catch (Throwable $e) {
                $result = 'Erro';
            }
        } else {
            $result = '0';
        }

        // Exibe o resultado no visor
        echo "<script>
            document.getElementById('display').textContent = '$result';
            document.getElementById('hiddenDisplay').value = '$result';
        </script>";
    }
    ?>

    <script>
        function appendToDisplay(value) {
            const display = document.getElementById('display');
            const hiddenDisplay = document.getElementById('hiddenDisplay');

            if (display.textContent === '0' && value !== '.') {
                display.textContent = value;
            } else {
                display.textContent += value;
            }

            // Atualiza o campo oculto para enviar ao PHP
            hiddenDisplay.value = display.textContent;
        }

        function clearDisplay() {
            document.getElementById('display').textContent = '0';
            document.getElementById('hiddenDisplay').value = '0';
        }
    </script>
</body>
</html>