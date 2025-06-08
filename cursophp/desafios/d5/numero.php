<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <main>
        <h1>analisador de numero real</h1>
        <?php 
            $num = $_POST["n"] ?? 0;


            echo "<p> Analisando o numero  <strong>" . number_format($num, 0, ",", ".") . " </strong> informado pelo usuario: </p>";

           $int = (int) $num ;
           $fra = $num - $int;

           echo "<ul><li> A parte inteira é <strong> ". number_format($int, 0, ",", ".") ." </strong></ul>";
           echo "<ul><li> A parte fracionaria é <strong> ". number_format($fra, 3, ",", ".") ." </strong></ul>";
           
        ?>
        <button onclick="javascriptt:history.go(-1)">Voltar</button>
    </main>
    
</body>
</html>