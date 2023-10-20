<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once('../../conexao.php');

if (isset($_GET['id_user'])) {
    $idUser = $_GET['id_user'];
} else {
    // Redirecione ou exiba uma mensagem de erro, pois o id_user não está definido.
    exit("ID do usuário não especificado.");
}

// Construa a consulta SQL de exclusão.
$query_delete = "DELETE FROM usuarios WHERE id_user = '$idUser'";

// Execute a consulta SQL para excluir o registro.
$delete = mysqli_query($conexao, $query_delete);

if ($delete) {
    $status = '0'; // Registro excluído com sucesso.
} else {
    $status = '1'; // Falha ao excluir o registro.
}

$data = ['status' => $status];
echo json_encode($data);
?>
