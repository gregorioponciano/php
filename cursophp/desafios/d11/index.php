<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>porcentagem do produto</title>
</head>
<body>
    <?php 
    $preço = $_GET['preco'] ?? '0';
    $reajuste = $_GET['reajuste'] ?? '0';
    ?>
    <main>
        <h1>Reajustador de preços</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="preco">preço do produto (R$)</label>
            <input type="number" name="preco" id="preco" min="0.10" step="0.01" value="<?=$preço?>">

              <label for="reajuste">Qual será p percentual de reajuste? (<strong><span id="p">?</span>%</strong>)</label>
             <input type="range" name="reajuste" id="reajuste" min="0" max="100" step="0.01" value="<?=$reajuste?>" oninput="mudaValor()">

          

            <input type="submit" value="Reajustar">
        </form>
    </main>
        <?php 
        $resultado = $preço * $reajuste / 100;
        $novoPreço = $preço - $resultado;
        ?>

    <section>
        <h2>resultado do Reajuste</h2>
        <p>O produto que custava R$<?=number_format($preço, 2, ",", ".")?> com <strong><?=$reajuste?>% de desconto</strong> vai passar a custar <strong><?=number_format($novoPreço, 2, ",", ".")?></strong> a partir de agora.</p>
    </section>

        <!--Declaraçoes  automatica ele chama o input range antes de atualizar-->
    <script>
        mudaValor();
        function mudaValor() {
            p.innerText = reajuste.value
        }
    </script>
</body>
</html>