<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado da Conversão</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Resultado da Conversão</h1>
    <p>
        <?php
            // Cotação do dólar (valor fixo ou você pode buscar via API depois)
            $cotacao = 5.50;

            // Recebe o valor via GET
            $real = $_GET["din"] ?? 0;

            // Faz a conversão
            $dolar = $real / $cotacao;

            // Usa formatação internacional
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);

            // Exibe o resultado
            echo "Seus <strong>" . numfmt_format_currency($padrao, $real, "BRL") . "</strong> equivalem a <strong>" . numfmt_format_currency($padrao, $dolar, "USD") . "</strong>";
        ?>
    </p>
    <a href="index.html">Voltar</a> <!-- Ou ajuste o nome se sua página for outra -->
</header>

</body>
</html>
