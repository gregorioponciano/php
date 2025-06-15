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
                //cotação vinda da  API do banco central
                //$inicio = date("Y-m-d", strtotime("-7 days"));
                //$fim =  date("Y-m-d");
                
                $url = '{"@odata.context":"https://was-p.bcnet.bcb.gov.br/olinda/servico/PTAX/versao/v1/odata$metadata#_CotacaoDolarPeriodo(cotacaoCompra,dataHoraCotacao)","valor":[{"cotacaoCompra":5.62480,"dataHoraCotacao":"2024-09-10 13:10:31.119"}]}';
                
                // Decodifica o JSON
                $dados = json_decode($url, true);
                
                //var_dump($dados);
                
                // Acessa a cotação
                $cotacao = $dados["valor"][0]["cotacaoCompra"];
                
                // quanstos $$ você tem?
                $real = $_REQUEST["din"] ?? 0;  
                // Equivalencia do dolar
                $dolar = $real / $cotacao;
            $padrao = numfmt_create("pt_BR", NumberFormatter::CURRENCY);
            echo "Seus " . numfmt_format_currency($padrao, $real, "BRL") . " equivalem a " . numfmt_format_currency($padrao, $dolar, "USD");
        ?>
    </p>
</header>
    
</body>
</html>