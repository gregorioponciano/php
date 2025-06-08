<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resposta</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>



    <header>
        <h1>resultado final</h1>
        <p>
            <?php
                $numero = $_REQUEST["num"];
                $antecessor = $numero - 1;
                $susessor = $numero + 1;

                echo "o numero escolhido foi $numero";
                echo "<br> o seu antecessor é $antecessor";
                echo "<br> e o seu susessor é $susessor";
            ?>
        </p>
    </header>
    
</body>
</html>