<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conversor de moedas</title>
</head>
<body>

<header>
    
    <p>
        <?php
                       //cotação copiada do google
                       $cotação = 5.50;   
                       // quanstos $$ você tem?
                       $real = $_REQUEST["din"] ?? 0;  
                       // Equivalencia do dolar
                       $dolar = $real / $cotação;
                    $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
                    echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
    </p>
</header>
    
</body>
</html>