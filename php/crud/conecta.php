
<?php
$host = "br886.hostgator.com.br"; // nome do host
$username = "turis832_matheus"; // nome de usuário do banco de dados
$password = "matheus0307"; // senha do banco de dados
$dbname = "turis832_bd_turismo_aventura"; // nome do banco de dados

// Estabelece a conexão
$conn = new mysqli($host, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}


?>