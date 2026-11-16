<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>fatorial</title>
</head>
<body>
    <h1>Calcular o fatoraial</h1>
    <form method="GET">
        <label>Coloque o numero</label><br>
        <input type="number" name="valor" step="any" required><br><br>

        <button type="submit">Calcule</button>

        <?php
    if (isset($_GET["valor1"]) ) {
        $valor1 = (float)$_GET["valor1"];
        $fatorial = 1;
        for ($i = 1; $i <= $valor1; $i++) { 
            $fatorial *= $i;
        }
        echo "<h2>o fatorial é: " . $fatorial . "</h2>";
    }
    ?>
    </form>