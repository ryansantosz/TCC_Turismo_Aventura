<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "br886.hostgator.com.br";
$username = "turis832_matheus";
$password = "matheus0307";
$dbname = "turis832_bd_turismo_aventura";

// Recebendo os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

// Criando a conexão com o banco de dados
$conn = new mysqli($host, $username, $password, $dbname);

// Verificando erros na conexão
if ($conn->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

// Consulta SQL para verificar o email e a senha
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND password = '$senha'";
$result = $conn->query($sql);

// Verificando se a consulta retornou algum resultado
if ($result->num_rows > 0) {
    // Login bem-sucedido
    header('Location: index.html');
    exit();
} else {
    // Usuário inválido - redirecionar para uma página de erro
    header('Location: error.php');
    exit();
}

// Fechando a conexão com o banco de dados
$conn->close();
?>
