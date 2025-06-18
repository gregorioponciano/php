<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Médias Aritméticas</title>
</head>
<body>

<?php 
// Convertendo valores para float, evitando erros de tipo
$valor1 = isset($_GET['v1']) ? (float) $_GET['v1'] : 0;
$peso1  = isset($_GET['p1']) ? (float) $_GET['p1'] : 0;
$valor2 = isset($_GET['v2']) ? (float) $_GET['v2'] : 0;
$peso2  = isset($_GET['p2']) ? (float) $_GET['p2'] : 0;

// Cálculos protegidos contra divisão por zero
$ma = ($valor1 + $valor2) / 2;
$mp = ($peso1 + $peso2 != 0) ? (($valor1 * $peso1 + $valor2 * $peso2) / ($peso1 + $peso2)) : 0;
?>

<main>
    <h1>Médias Aritméticas</h1>
    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="get">
        <label for="v1">1° valor:</label>
        <input type="number" name="v1" id="v1" required value="<?= $valor1 ?>">

        <label for="p1">1° peso:</label>
        <input type="number" name="p1" id="p1" required min="1" value="<?= $peso1 ?>">

        <label for="v2">2° valor:</label>
        <input type="number" name="v2" id="v2" required value="<?= $valor2 ?>">

        <label for="p2">2° peso:</label>
        <input type="number" name="p2" id="p2" required min="1" value="<?= $peso2 ?>">

        <input type="submit" value="Calcular Médias">
    </form>
</main>


<section>
    <h2>Resultado</h2>
    <p>Valores analisados: <strong><?= $valor1 ?></strong> e <strong><?= $valor2 ?></strong></p>
    <ul>
        <li>Média Aritmética Simples: <strong><?= number_format($ma, 2, ',', '.') ?></strong></li>
        <li>Média Aritmética Ponderada (pesos <?= $peso1 ?> e <?= $peso2 ?>): 
            <strong><?= number_format($mp, 2, ',', '.') ?></strong></li>
    </ul>
</section>


<!--< ?php if ($_GET): ?>
<section>
    <h2>Resultado</h2>
    <p>Valores analisados: <strong>< ?= $valor1 ?></strong> e <strong>< ?= $valor2 ?></strong></p>
    <ul>
        <li>Média Aritmética Simples: <strong>< ?= number_format($ma, 2, ',', '.') ?></strong></li>
        <li>Média Aritmética Ponderada (pesos < ?= $peso1 ?> e < ?= $peso2 ?>): 
            <strong>< ?= number_format($mp, 2, ',', '.') ?></strong></li>
    </ul>
</section>
< ?php endif; ?>               (neste modo o formulario de resposta nao abre so depois que digita clicar e ver o resultado)-->


</body>
</html>
