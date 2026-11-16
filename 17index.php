<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>par ou impar</title>
</head>
<body>

<h1>Ver se um numero é ár ou impar</h1>
<form method="GET">

    <label>Coloque o numero</label><br>
    <input type="number" name="numero" step="any" required><br><br>

    <?php
    if (isset($_GET["valor1"])) {
    $valor1 = (float)$_GET["valor1"];
       
    if ($valor1 % 2 == 0) {
        echo "<h2>O número $valor1 é par</h2>";
    } else {
        echo "<h2>O número $valor1 é ímpar</h2>";
    }
    ?>
    </form>