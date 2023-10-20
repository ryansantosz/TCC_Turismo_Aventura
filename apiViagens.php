<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "br886.hostgator.com.br"; // Endereço do banco de dados
$username = "turis832_matheus"; // Nome de usuário do banco de dados
$password = "matheus0307"; // Senha do banco de dados
$database = "turis832_bd_turismo_aventura"; // Nome do banco de dados

// Estabelecer conexão
$conn = new mysqli($host, $username, $password, $database);

// Verificar se houve erro na conexão
if ($conn->connect_error) {
    die("Erro na conexão: " . $conn->connect_error);
}

// Função para obter informações sobre viagens
function getViagens($conn) {
    $query = "SELECT * FROM tb_carrinho inner join usuarios on usuarios.id_user = tb_carrinho.id_usuario"; // Supondo que você tenha uma tabela chamada "viagens" no banco de dados

    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $viagens = array();

        while ($row = $result->fetch_assoc()) {
            $viagens[] = $row;
        }

        return $viagens;
    } else {
        return array();
    }
}

// Verificar se foi feita uma requisição GET
if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $viagens = getViagens($conn);

    // Responder com as informações das viagens em formato JSON
    header("Content-Type: application/json");
    echo json_encode($viagens);
}

// Fechar conexão no final
$conn->close();
?>
