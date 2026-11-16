<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Mercado</title>
</head>
<body>
    <h1>Calcular a compra e descontos de um cliente</h1>
    
    <form method="POST">
        <label>Coloque o valor da compra:</label><br>
        <input type="number" name="valor1" step="any" required><br><br>
    
        <div class="quadro-escolha">
            <h3>Forma de pagamento:</h3>
            
            <label>
                <input type="radio" name="pagamento" value="A" required> Pix ou dinheiro (5% de desconto)
            </label>
            <br><br>
            
            <label>
                <input type="radio" name="pagamento" value="B"> Cartão (sem desconto)
            </label>
            <br><br>
        </div>

        <button type="submit">Confirmar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valor1 = (float)$_POST["valor1"];
        $escolha = $_POST["pagamento"];
        $desconto = 0;

        if ($escolha == "A") {
            $desconto = $valor1 * 0.05;
        } else if ($escolha == "B") {
            $desconto = 0;
        }

        $total = $valor1 - $desconto;
        
        echo "<h2>Valor final da compra: R$ " . number_format($total, 2, ',', '.') . "</h2>";
    }
    ?>
</body>
</html>
