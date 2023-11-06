<?php
session_start();

error_reporting(E_ALL);
ini_set('display_errors', '1');
include('../conexao.php');

date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");
  
$id_user = $_SESSION['id_user'];

$queryBuscaNome = "select id_user,first_name,email,last_name from usuarios WHERE id_user = $id_user";

$result_queryBuscaNome = mysqli_query($conexao, $queryBuscaNome);


$row = mysqli_fetch_array($result_queryBuscaNome);

$email = $row['email'];

$id = $row['id_user'];


$pwsNova = md5($_POST['pwsNova']);

$date_expire = date('Y-m-d h:i:s', strtotime($today. ' + 3 Months'));

$atualizaSenha = "update usuarios set password = '$pwsNova', expira_sen = '$date_expire' where id_user = $id_user";

$result_queryBuscaNome = mysqli_query($conexao, $atualizaSenha);



$msg = "Senha Alterada com Sucesso!";
$cor = "class='alert alert-success'";



$retorno = array('msg' => $msg, 'cor' => $cor);
print (json_encode($retorno));
exit();



?>