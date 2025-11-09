<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercicio php</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <?php
        //formulario retroalimentado (captura os dados)
        $v1 = $_GET['v1'] ?? 0;
        $v2 = $_GET['v2'] ?? 0;
        ?>
                   
        <main>
            <h1>Somador de valores</h1>
            <form action="<?=$_SERVER['PHP_SELF'] ?>" method="get">
                <label for="v1">valor 1</label>
                <input type="number" name="v1" id="v1" value="<?=$v1?>"> <!--mantem o valor digitado dentro do input -->
                <label for="v2">valor 2</label>
                <input type="number" name="v2" id="v2" value="<?=$v2?>">
                <input type="submit" value="somar">
            </form>
        </main>

        <section>
            <div class="resultado" id="resultado">
                <h2>resultado da soma</h2>
                <?php 
                

                $resultado = $v1 + $v2;

                echo "<p>A soma entre os valores $v1 e $v2 é igual $resultado</p>" ;?>
            </div>
        </section>


    
</body>
</html>