<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>SOMA</title>
</head>
<body>
    <h1>Calcular a soma de 2 valores</h1>
    <form method="GET">
        <label>Coloque o primeiro valor</label><br>
        <input type="number" name="valor1" step="any" required><br><br>

        <label>Coloque o segundo valor</label><br>
        <input type="number" name="valor2" step="any" required><br><br>

        <button type="submit">Calcule</button>

        <?php
    if (isset($_GET["valor1"]) && isset($_GET["valor2"])) {
        $valor1 = (float)$_GET["valor1"];
        $valor2 = (float)$_GET["valor2"];
        $total = $valor1 + $valor2;
        
        echo "<h2>A soma dos dois números é: " . number_format($total, 2, ',', '.') . "</h2>";
    }
    ?>
    </form>