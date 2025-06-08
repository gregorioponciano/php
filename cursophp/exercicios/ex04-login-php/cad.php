<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bem vindo</title>
</head>
<body>

<header>
    <h1>resultado do processo</h1>
</header>
<main>
    <?php 
        //var_dump($_REQUEST); // $_GET $_POST $_COOKIES

        $nome = $_GET["nome"];
        $sobrenome = $_GET["sobrenome"];
        echo "<p>é um prazer te conhecer, <strong>$nome $sobrenome</strong> este é meu site!</p>";
    ?>

    <p><a href="javascript:history.go(-1)">logout</a></p>
</main>
    
</body>
</html>