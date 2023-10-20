<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include('../conexao.php');

$BASE_URL = 'https://turismoaventura.com.br'; // Add a semicolon to terminate the statement
$txtEmailT = mysqli_real_escape_string($conexao, $_POST['txtEmailT']);

date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d H:i:s"); // Use 'H' for 24-hour format

$campos = "id_user, email, first_name, last_name";

$qry_Usuario = "SELECT $campos FROM usuarios WHERE email = '$txtEmailT'";

$result_qry_Usuario = mysqli_query($conexao, $qry_Usuario);

$row = mysqli_fetch_array($result_qry_Usuario);

$row_count = mysqli_num_rows($result_qry_Usuario);

$nome_usuario = "{$row['first_name']} {$row['last_name']}";

if($row != null && $row['id_user'] != ''){
    $id_user = $row['id_user'];
}
else{
    $id_user = 0;
}

// Assuming $row2 is defined elsewhere, otherwise, you need to fetch it similarly

$novaSenha_L = "Turismo@";
$novaSenha_n = 1; // It seems like you are reassigning this variable; make sure it's what you intend to do.

$msg = '';
$cor = "class='alert alert-info'";

if($row != null && $row_count > 0){
    if($row['email'] == ''){
        $msg = 'Seu usuário não tem email, por favor, atualize no registro:';
        $cor = "class='alert alert-warning'";
    }
    elseif($row['email'] != $txtEmailT){
        $msg = 'O email inserido é diferente do cadastrado, por favor, verifique novamente';
        $cor = "class='alert alert-warning'";
    }
    else{
        // Your email and emailBody section is commented out, so make sure it's uncommented and correct.

        // The rest of your code, like sending an email, looks fine as long as the commented-out parts are enabled and correct.
    }
}
else{
    $msg = "Usuário não encontrado!"; // Remove the colon
    $cor = "class='alert alert-danger'";
}

$retorno = array('msg' => $msg, 'cor' => $cor);
print(json_encode($retorno)); // Add parentheses for clarity
exit();
?>
