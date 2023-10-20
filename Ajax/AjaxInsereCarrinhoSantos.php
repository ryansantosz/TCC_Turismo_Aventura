<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');

include_once('../conexao.php');

$GuardaDate = $_POST['GuardaDate'];
$nomeViagem = 'Santos';

// Converter a data para o formato americano (ano/mês/dia)
$dateTime = DateTime::createFromFormat('d/m/Y', $GuardaDate);
if ($dateTime) {
    $GuardaDate = $dateTime->format('Y-m-d');
} else {
    // Lida com erro na conversão da data
    echo "Erro na conversão da data.";
    exit;
}

$checkQuery = "SELECT COUNT(*) as count FROM tb_carrinho WHERE id_usuario = '{$_SESSION['id_user']}' AND data_ida = '{$GuardaDate}' AND nome_viagem = '{$nomeViagem}'";

$checkResult = $conexao->query($checkQuery);

if ($checkResult) {
    $row = $checkResult->fetch_assoc();
    $count = $row['count'];

    // Se já existe um registro, exiba um alerta
    if ($count > 0) {
        echo "Já existe um registro para esta data e nome de viagem!";
        exit;
    }
} else {
    echo "Erro na verificação: " . $conexao->error;
    exit;
}

$quantidadeKid = $_POST['quantidadeKid'];
$quantidadeAdult = $_POST['quantidadeAdult'];
$quantidadeSr = $_POST['quantidadeSr'];
$checkboxAssento = $_POST['CheckboxChecked'];
$qndtTotalIngresso = $_POST['qndtTotalIngresso'];
$GuardaValorKid = $_POST['GuardaValorKid'];
$GuardaValorAdulto = $_POST['GuardaValorAdulto'];
$GuardaValorIdoso = $_POST['GuardaValorIdoso'];
$GuardaTodosValor = $_POST['GuardaTodosValor'];
$ValorTotalViagem = $GuardaTodosValor + 250;
$checkboxAssento = implode(', ', $checkboxAssento);

// Criar a consulta SQL com interpolação de valores
$query = "INSERT INTO tb_carrinho (
                    id_usuario,
                    data_criacao,
                    ingresso_adulto,
                    ingresso_idoso,
                    ingresso_kid,
                    preco_kid,
                    preco_adulto,
                    preco_idoso,
                    preco_total,
                    nome_viagem,
                    data_ida,
                    numero_assento,
                    qntd_ingresso
                ) VALUES (
                    '{$_SESSION['id_user']}',
                    NOW(),
                    '{$quantidadeAdult}',
                    '{$quantidadeSr}',
                    '{$quantidadeKid}',
                    '{$GuardaValorKid}',
                    '{$GuardaValorAdulto}',
                    '{$GuardaValorIdoso}',
                    '{$ValorTotalViagem}',
                    'Santos',
                    '{$GuardaDate}',
                    '{$checkboxAssento}',
                    '{$qndtTotalIngresso}'
                )";

// Executar a consulta SQL
$result = $conexao->query($query);

// Verificar se a execução foi bem-sucedida
if ($result) {
    echo "Inserção realizada com sucesso!";
} else {
    echo "Erro na inserção: " . $conexao->error;
}
?>
