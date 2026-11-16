<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Desafio</title>
</head>
<body>
    <h1>Classificação de pessoas</h1>
    
    <form method="POST">
        <label>Coloque seu nome:</label><br>
        <input type="text" name="nome" required><br><br>

        <label>Coloque a sua idade:</label><br>
        <input type="number" name="valor" required><br><br>
    
        <div class="quadro-escolha">
            <h3>Sexo:</h3>
            
            <label>
                <input type="radio" name="sexo" value="A" required> Homem
            </label>
            <br><br>
            
            <label>
                <input type="radio" name="sexo" value="B"> Mulher
            </label>
            <br><br>
        </div>

        <button type="submit">Confirmar</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST["nome"]);
        $idade = (int)$_POST["valor"];
        $sexo = $_POST["sexo"];
        $escolha = 0;

        if ($sexo == "A") {
            $escolha = 0;
        } else if ($sexo == "B") { 
            $escolha = 1;
        }

        if ($idade > 25) {
            $faixa_etaria = 0;
        } else {
            $faixa_etaria = 1;
        }
        
        $criterio = $faixa_etaria + $escolha;

        if ($criterio < 2) {
            echo "<h2>$nome: NÃO ACEITA</h2>";
        } else if ($criterio == 2) { 
            echo "<h2>$nome: ACEITA</h2>";
        }
    }
    ?>
</body>
</html>
