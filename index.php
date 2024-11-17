<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visão do Código do Sistema de Cadastro e Login</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <header>
        <h1>Sistema de Cadastro e Login</h1>
        <p>Veja os códigos utilizados no cadastro e login de usuários</p>
    </header>

    <main>


        <section>
            <h2>Código de Cadastro no PHP (cadastrar.php)</h2>
            <p>Aqui está o código PHP que processa o cadastro do usuário e armazena os dados no banco de dados.</p>
            <div class="code">
&lt;?php<br><br>
// Conexão com o banco de dados<br>
$conexao = new mysqli('localhost', 'usuario', 'senha', 'cadastro');<br><br>

// Verifica se a conexão foi bem-sucedida<br>
if ($conexao->connect_error) {<br>
die("Conexão falhou: " . $conexao->connect_error);<br>
}<br><br>

// Recebe os dados do formulário<br>
$nome = $_POST['nome'];<br>
$email = $_POST['email'];<br>
$senha = password_hash($_POST['senha'], PASSWORD_DEFAULT);<br><br>

// Insere os dados na tabela 'usuarios'<br>
$sql = "INSERT INTO usuarios (nome, email, senha) VALUES ('$nome', '$email', '$senha')";<br><br>

if ($conexao->query($sql) === TRUE) {<br>
echo "Cadastro realizado com sucesso!";<br>
} else {<br>
echo "Erro: " . $sql . "<br>" . $conexao->error;<br>
}<br><br>

$conexao->close();<br>
?&gt;
            </div>
        </section>

        <section>
            <h2>5. Código de Login no PHP (login.php)</h2>
            <p>Aqui está o código PHP que processa o login do usuário e verifica se as credenciais estão corretas.</p>
            <div class="code">
&lt;?php<br><br>
// Conexão com o banco de dados<br>
$conexao = new mysqli('localhost', 'usuario', 'senha', 'cadastro');<br><br>

// Verifica se a conexão foi bem-sucedida<br>
if ($conexao->connect_error) {<br>
die("Conexão falhou: " . $conexao->connect_error);<br>
}<br><br>

// Recebe os dados do formulário<br>
$email = $_POST['email'];<br>
$senha = $_POST['senha'];<br><br>

// Consulta o usuário no banco de dados<br>
$sql = "SELECT * FROM usuarios WHERE email = '$email'";<br>
$resultado = $conexao->query($sql);<br><br>

if ($resultado->num_rows > 0) {<br>
$usuario = $resultado->fetch_assoc();<br>
if (password_verify($senha, $usuario['senha'])) {<br>
echo "Login bem-sucedido!";<br>
} else {<br>
echo "Senha incorreta!";<br>
}<br>
} else {<br>
echo "Usuário não encontrado!";<br>
}<br><br>

$conexao->close();<br>
?&gt;
            </div>
        </section>

    </main>

    <footer>
        <p>&copy; 2024 Meu Site. Todos os direitos reservados.</p>
    </footer>

</body>

</html>
