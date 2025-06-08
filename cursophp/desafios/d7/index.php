<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Desafio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<?php 
    $sal = $_REQUEST['sal'] ?? 0;
    $min = 1380.00;
?>

<main>
    <h1>informe seu salario</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
        <label for="sal">Salario</label>
        <input type="number" name="sal" id="sal" step="0.01" value="<?=$sal?>">
        <p>considerando o salario minimo de <strong>R$1.380,00</strong></p>
        <input type="submit" value="Analizar">
    </form>
    
</main>

<section>
    <h2>Resultado Final</h2>
    <?php 

    $resultado = intdiv($sal, $min);
    $resto = $sal % $min;

    echo "<p>quem recebeu um salario de  "  .  number_format($sal, 2, ',', '.')  .  "   ganha    $resultado  salarios minimos</p>" . " e mais " . number_format($resto, 2, ',', '.');
    
    ?>


</section>

<img src="real-inteiro.jpg" alt="">
    
</body>
</html>