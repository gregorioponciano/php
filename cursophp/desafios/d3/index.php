<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

    <header>
        <h1>connversor de moedas</h1>

        <p>
           <?php 
           //cotação copiada do google
                $cotação = 5.50;

            // quanstos $$ você tem?
            $real = 1000;

            // Equivalencia do dolar
            $dolar = $real / $cotação;

            // Mostrar resultado

            //echo "Seus R\$  $real  equivalem a US\$  $dolar";              // os 2 meios dqao o mesmo resultado aparece muitas casas decimais ex: 181.18183723 
            //echo "Seus R\$" . $real . "equivalem a US\$" . $dolar;              // os 2 meios dqao o mesmo resultado aparece muitas casas decimais ex: 181.18183723

            //echo "Seus R\$" . number_format($real, 2) . "equivalem a US\$" . number_format($dolar, 2);   // ja formata para duas casas decimais

            //echo "Seus R\$" . number_format($real, 2, "," ,".") . "equivalem a US\$" . number_format($dolar, 2, ",", ".");  //dependendo do pais BRASIl R$1.000,00    US R$1,000.00


             // Formatação de moedas com internacionalização!
             // Biblioteca intl (Internallization PHP)

            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus" . numfmt_format_currency($padrao, $real, "BRL") . "equivalem a" . numfmt_format_currency($padrao, $dolar, "USD");
           ?> 

        </p>
    </header>
    
</body>
</html>