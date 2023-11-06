
<?php
    session_start();
    error_reporting(E_ALL);
    ini_set('display_errors', '1');


    include_once('../../conexao.php');


    if(isset($_POST['txtNome'])){
        $first_name = $_POST['txtNome'];
    }else{
        $first_name = "";
    }
    if(isset($_POST['txtSobrenome'])){
        $last_name = $_POST['txtSobrenome'];
    }else{
        $last_name = "";
    }
    if(isset($_POST['txtEmail'])){
        $email = $_POST['txtEmail'];
    }else{
        $email = "";
    }
    if(isset($_POST['txtTelefone'])){
        $tell = $_POST['txtTelefone'];
    }else{
        $tell = "";
    }
    if(isset($_POST['slcStatus'])){
        $status = $_POST['slcStatus'];
    }else{
        $status = "";
    }
    if(isset($_POST['slcTipoPerfil'])){
        $tipoPerfil = $_POST['slcTipoPerfil'];
        if($tipoPerfil == 0){
            $descPerfil = 'Administrador';
        }else{
            $descPerfil = 'Cliente';
        }
    }else{
        $tipoPerfil = "";
    }

    $query_select = "SELECT email FROM usuarios WHERE email = '$email'";
    $select = mysqli_query($conexao, $query_select);
    $array = mysqli_fetch_array($select);
    $logarray = isset($array['email']) ? $array['email'] : null;

    $result_qryUsuarioEmail = $select;

    $row_count = mysqli_num_rows($result_qryUsuarioEmail);

    $today = date("Y-m-d h:i:s");

    if($row_count > 0){
        $status = '2';
    } else {
        $query ="INSERT usuarios (
                    update_date,
                    updater,
                    email,
                    first_name,
                    last_name,
                    nu_perfil_usuario,
                    password,
                    telefone,
                    expira_sen, 
                    data_criacao,
                    status
                )VALUES(
                    NOW(),
                    NOW(),
                    '{$email}',
                    '{$first_name}',
                    '{$last_name}',
                    '{$tipoPerfil}',
                    md5('Turismo@2023'),
                    '{$tell}',
                    '{$today}',
                    '{$today}',
                    '{$status}'
                )";
        $insert = mysqli_query($conexao, $query);

        if($insert){
            $status = '0';
        } else {
            $status = '1';
        };
    }

    $data = ['status' => $status];
    echo json_encode($data);
?>
