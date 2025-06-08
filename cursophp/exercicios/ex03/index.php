<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date e hora</title>
</head>
<body>

    <?php 
    date_default_timezone_set("America/Sao_Paulo"); // GMT -3
        echo "Hoje é dia" .date("d/M/Y"); // D se tiver maiusculo mostra dia da semana 
        echo "e a hora Atual é " . date("G:i:s T") // T de Times zone
    ?>

    
</body>
</html>