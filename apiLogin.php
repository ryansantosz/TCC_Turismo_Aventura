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

// Função para realizar o login
function login($conn, $username, $password) {
    $hashedPassword = md5($password);  // Hash da senha
    $query = "SELECT * FROM usuarios WHERE email = '$username' AND password = '$hashedPassword'";
    $result = $conn->query($query);

    if ($result->num_rows === 1) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

// Verificar se foi feita uma requisição POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $data = json_decode(file_get_contents("php://input"), true);

    if (isset($data["username"]) && isset($data["password"])) {
        $username = $data["username"];
        $password = $data["password"];

        $user = login($conn, $username, $password);

        if ($user) {
            // Login bem-sucedido
            $response = array("success" => true, "user" => $user);
            http_response_code(200);
        } else {
            // Login falhou
            $response = array("success" => false, "message" => "Login failed");
            http_response_code(401);
        }
    } else {
        // Dados incompletos
        $response = array("success" => false, "message" => "Incomplete data");
        http_response_code(400);
    }

    header("Content-Type: application/json");
    echo json_encode($response);
}

// Fechar conexão no final
$conn->close();

?>
