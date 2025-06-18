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
    $saque = $_GET['saque'] ?? 0;
    ?>

    <main>
        <h1>Caixa Eletronico</h1>
        <form action="<?=$_SERVER['PHP_SELF']?>" method="get">
            <label for="saque">Qual o valor que você deseja sacar? (R$)
                <sup>*</sup>
            </label>
            <input type="number" name="saque" id="saque" required value="<?=$saque?>">
            <p style="font-size: 0.6em;"><sup>*</sup>Notas disponiveis: R$100, R$50, R$20, R$10,  R$5, R$2 e R$1</p>
            <input type="submit" value="Sacar">
        </form>
    </main>

    <?php 
    $resto = $saque;

    // saque de R$100
    $tot100 = floor($resto / 100);
    $resto %= 100;

    //saque de R$50
    $tot50 = floor($resto / 50);
    $resto %= 50;

        //saque de R$20
    $tot20 = floor($resto / 20);
    $resto %= 20;
    
    // saque de R$ 10
    $tot10 = floor($resto / 10);
    $resto %= 10;

    // saque de R$ 5
    $tot5 = floor($resto / 5);
    $resto %= 5;

    // saque de R$ 2
    $tot2 = floor($resto / 2);
    $resto %= 2;

    // saque de R$ 1
    $tot1 = floor($resto / 1);
    $resto %= 1;
    ?>

    <section>
        <h2>Saque de <?=number_format($saque, 2, ",", ".")?> realizado</h2>
        <p>O caixa eletrônico vai te entregar as seguintes notas:</p>
        <ul>
            <li><img src="./image/100-reais.jpg" alt="img">x<?=$tot100?></li>
            <li><img src="./image/50-reais.jpg" alt="img">x<?=$tot50?></li>
            <li><img src="./image/20-reais.jpg" alt="img">x<?=$tot20?></li>
            <li><img src="./image/10-reais.jpg" alt="img">x<?=$tot10?></li>
            <li><img src="./image/5-reais.jpg" alt="img">x<?=$tot5?></li>
            <li><img src="./image/2-reais.jpg" alt="img">x<?=$tot2?></li>
            <li><img src="./image/1-real.jpg" alt="img" style="width: 70px;">x<?=$tot1?></li>
        </ul>

    </section>
</body>
</html>