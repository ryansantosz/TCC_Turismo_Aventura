<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once('../conexao.php');

// Verifica se o método de requisição é POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Use a função mysqli_real_escape_string ou declarações preparadas para tratar os valores
    $idCarrinho = mysqli_real_escape_string($conexao, $_POST['idCarrinho']);
    $valorPagamento = mysqli_real_escape_string($conexao, $_POST['valorPagamento']);
    $numeroCartao = mysqli_real_escape_string($conexao, $_POST['numeroCartao']);
    $nomeCompleto = mysqli_real_escape_string($conexao, $_POST['nomeCompleto']);
    $anoVencimento = mysqli_real_escape_string($conexao, $_POST['anoVencimento']);
    $codSeguranca = mysqli_real_escape_string($conexao, $_POST['codSeguranca']);
    $numParcelas = mysqli_real_escape_string($conexao, $_POST['numParcelas']);
    $valorTotalViagem = mysqli_real_escape_string($conexao, $_POST['valorTotalViagem']);
    $valorFinal = mysqli_real_escape_string($conexao, $_POST['valorFinal']);

    // Outros dados já existentes
    $idUsuario = $_SESSION['id_user'];

    // Insere os dados na tabela de acordo com o valorPagamento
    if ($valorPagamento === 'Cartao') {
        $sql = "INSERT INTO tb_pagamento (
            tipo_pagamento,
            numero_cartao,
            dt_vencimento,
            codigo_seguranca,
            nome_titular_cartao,
            id_usuario,
            qntd_parcela,
            valor_parcelado,
            valor_total,
            Data_pagamento
        ) VALUES (
            'Cartão de Crédito',
            '$numeroCartao',
            '$anoVencimento',
            '$codSeguranca',
            '$nomeCompleto',
            '$idUsuario',
            '$numParcelas',
            '$valorTotalViagem',
            '$valorFinal',
            NOW()
        )";

        $queryDelete = "DELETE FROM tb_carrinho WHERE id_usuario = '$idUsuario' AND id_carrinho = '$idCarrinho'";
        
        if ($conexao->query($sql) === TRUE) {
            echo json_encode(array('success' => true, 'message' => 'Pagamento efetuado com sucesso.'));
        } else {
        }
    } else {
    }
}

?>
