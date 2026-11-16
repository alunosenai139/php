<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Calculadora</title>
</head>
<body>
    <h1>Calculadora</h1>
    
    <form method="POST">
        <label>Coloque o primeiro valor:</label><br>
        <input type="number" name="valor1" step="any" required><br><br>
    
        <div class="quadro-escolha">
            <h3>Forma da operação:</h3>
            
            <label>
                <input type="radio" name="operacao" value="A" required> Soma
            </label>
            <br><br>
            <label>
                <input type="radio" name="operacao" value="B"> Subtração
            </label>
            <br><br>
            <label>
                <input type="radio" name="operacao" value="C"> Multiplicação
            </label>
            <br><br>
            <label>
                <input type="radio" name="operacao" value="D"> Divisão
            </label>
            <br><br>
        </div>

        <label>Coloque o segundo valor:</label><br>
        <input type="number" name="valor2" step="any" required><br><br>

        <button type="submit">Confirmar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = (float)$_POST["valor1"];
        $valor2 = (float)$_POST["valor2"];
        $escolha = $_POST["operacao"];
        $conta = 0;

        if ($escolha == "A") {
            $conta = $valor1 + $valor2;
        } else if ($escolha == "B") {
            $conta = $valor1 - $valor2;
        } else if ($escolha == "C") {
            $conta = $valor1 * $valor2;
        } else if ($escolha == "D") {
            if ($valor2 != 0) {
                $conta = $valor1 / $valor2;
            } else {
                echo "<h2>Erro: Divisão por zero não é permitida.</h2>";
                exit;
            }
        }
        
        echo "<h2>O resultado da conta é: " . number_format($conta, 2, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>
