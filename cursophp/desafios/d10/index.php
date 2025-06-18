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
    $atual = date("Y");
    $nasc = $_GET['nasc'] ?? '2000';
    $ano = $_GET['ano'] ?? $atual;
    ?>

    <main>
        <h1>calculando a sua idade</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="nasc">digite seu ano</label>
            <input type="number" name="nasc" id="nasc" min="1990" max="<?=$atual -18?>" value="<?=$nasc?>">
            <label for="ano">Quer saber sua idade em que ano? (Estamos em <strong> <?=$atual?></strong>)</label>
            <input type="number" name="ano" id="ano" min="1990" value="<?=$ano?>">
            <input type="submit" value="Qual sera minha idade?">
        </form>
    </main>

    <section>
        <?php 
        $idade = $ano - $nasc;
        ?>
        <h2>Resultado</h2>
        <p>Quem nasceu em <?=$nasc?> vai ter <strong><?=$idade?> anos</strong> em <?=$atual?> </p>
    </section>
</body>
</html>