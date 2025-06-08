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
    $dividendo = $_GET['d1'] ?? 0;
    $divisor = $_GET['d2'] ?? 1;
?>

<main>
    <h1>Anatomia de uma divisao</h1>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
    <label for="d1">Dividendo</label>
    <input type="number" name="d1" id="d1" min="1" value="<?=$dividendo?>">
    <label for="d2">Divisor</label>
    <input type="number" name="d2" id="d2" min="1" value="<?=$divisor?>">
    <input type="submit" value="analizar">
    </form>
</main>

<section>
    <h2>Estrutura da divisão</h2>
   <?php 
   // calculos
    $quociente = intdiv($dividendo, $divisor);
    $resto = $dividendo % $divisor;

    echo "<ul>";
        echo "<li>Dividendo: $dividendo</li>";
        echo "<li>Divisor: $divisor</li>";
        echo "<li>Quociente: $quociente</li>";
        echo "<li>Resto: $resto</li>";
    echo "</ul>";
    ?>
    
    <table class="divisao">
        <tr>
            <td><?=$dividendo?></td>
            <td><?=$divisor?></td>
        </tr>
        <tr>
            <td><?=$quociente?></td>
            <td><?=$resto?></td>
        </tr>
    </table>
</section>
    
</body>
</html>