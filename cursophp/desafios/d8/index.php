<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <?php 
    //area de declaraçoes
    $numero = $_GET['num'] ?? '';

    
    ?>

    <main>
        <h1>informe um numero</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="num">Numero</label>
            <input type="number" name="num" id="num" value="<?=$numero?>">
            <input type="submit" value="Calcular Raizes">
        </form>
    </main>
    <section>
        <h2>resultado final</h2>
        <?php 
        $rq = $numero ** (1/2);
        $rc = $numero ** (1/3);

        echo "<p>Analisando o numero <strong>$numero</strong>, temos:";
        echo "<ul><li>A sua raiz quadrada é <strong>". number_format($rq, 2, ",", "."). "</strong></li>";

        echo "<li>A sua raiz cubica é <strong>". number_format($rc, 2, ",", ".") . "</strong></li></ul>";
        ?>
    </section>
</body>
</html>