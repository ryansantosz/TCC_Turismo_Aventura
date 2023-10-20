<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once('../conexao.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_GET['identificador'])) {
        $id_carrinho = $_GET['identificador'];
        
        // Construa a sua consulta de deleção
        $query = "DELETE FROM tb_carrinho WHERE id_usuario = '{$_SESSION['id_user']}' AND id_carrinho = '$id_carrinho'";

        // Execute a consulta
        $result = mysqli_query($conexao, $query);

        if ($result) {
            // Responda com sucesso se a deleção foi bem-sucedida
            echo json_encode(['status' => 'success', 'message' => 'Viagem excluída com sucesso.']);
        } else {
            // Se houver um erro na consulta de deleção
            echo json_encode(['status' => 'error', 'message' => 'Erro ao excluir a viagem: ' . mysqli_error($conexao)]);
        }
    } else {
        // Se o identificador não foi fornecido
        echo json_encode(['status' => 'error', 'message' => 'Identificador não fornecido.']);
    }
} else {
    // Se a solicitação não for do tipo POST
    echo json_encode(['status' => 'error', 'message' => 'Método de solicitação inválido.']);
}
?>
