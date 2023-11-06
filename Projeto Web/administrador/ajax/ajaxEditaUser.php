<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$host = "br886.hostgator.com.br";
$username = "turis832_matheus";
$password = "matheus0307";
$dbname = "turis832_bd_turismo_aventura";

// Estabelece a conexão
$conn = new mysqli($host, $username, $password, $dbname);

// Verifica se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Falha na conexão: " . $conn->connect_error);
}

if (isset($_POST["tipo"], $_POST["email"], $_POST["nome"], $_GET["id_user"])) {
    $tipo = $_POST["tipo"];
    $email = $_POST["email"];
    $nome = $_POST["nome"];
    $id_user = $_GET["id_user"];  // Use $_GET para obter o ID do usuário da URL

    // Prepara a consulta SQL usando prepared statement
    $sql = "UPDATE usuarios 
            SET email = ?,
                nome  = ?,
                nu_perfil_usuario = ?
            WHERE id_user = ?";

    $stmt = $conn->prepare($sql);

    // Verifica se ocorreu algum erro ao preparar a consulta
    if (!$stmt) {
        die("Erro na consulta: " . $conn->error);
    }

    // Protege contra SQL Injection
    $stmt->bind_param("ssii", $email, $nome, $tipo, $id_user);

    // Executa a consulta
    if ($stmt->execute()) {
        echo "Dados Alterados com sucesso!";
    } else {
        echo "Erro ao alterar dados: " . $stmt->error;
    }

    // Fecha o statement
    $stmt->close();
} else {
    echo "Dados insuficientes para a atualização.";
}

// Fecha a conexão
$conn->close();
?>
