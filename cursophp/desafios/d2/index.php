<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>numero aleatorio</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>gerando numero aleatorio</h1>

        <?php 
            $min = 0;
            $max = 100;

            $num = mt_rand($min, $max);

            // rand() = 1951 - Linear Congretial Gererator
            // mt_rand() = 1997 - Mersenne Twister
            // Apartir do PHP 7.1, rand() é um simples apontamento para mt_rand()
            // random_int() gera numeros aleatórios criptograficamente seguros

            echo "Gerando numeros aleatórios entre $min e $max";
            echo "<br>o numero gerado foi $num";
        ?> <br>
        <button onclick="javascript:document.location.reload()">&#x1F504; Gerar outro</button>
    </header>
    
</body>
</html>