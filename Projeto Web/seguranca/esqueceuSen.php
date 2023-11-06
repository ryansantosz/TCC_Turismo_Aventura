<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', '1');
include('../conexao.php');

$txtEmailT = mysqli_real_escape_string($conexao, $_POST['txtEmailT']);

date_default_timezone_set('America/Sao_Paulo');

$today = date("Y-m-d h:i:s");

$campos = "id_user, email, first_name, last_name";

$qry_Usuario = "select $campos from usuarios where email = '$txtEmailT'";


$result_qry_Usuario = mysqli_query($conexao, $qry_Usuario);

$row = mysqli_fetch_array($result_qry_Usuario);

$row_count = mysqli_num_rows($result_qry_Usuario);

if($row != null && $row['id_user'] != ''){
	$id_user = $row['id_user'];
}
else{
	$id_user = 0;
}


$tamanhoSenha = 10;
 
$caracteresPermitidos = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ_!@#';
 
$senha = '';
for ($i = 0; $i < $tamanhoSenha; $i++) {
  $senha .= $caracteresPermitidos[rand(0, strlen($caracteresPermitidos) - 1)];
}


$pwsNova = md5($senha);
 

$atualizaSenha = "update usuarios set password = '$pwsNova', expira_sen = '$today' where id_user = $id_user";

$result_queryBuscaNome = mysqli_query($conexao, $atualizaSenha);

$nome_usuario = "{$row['first_name']} {$row['last_name']}";






	
$novaSenha_L = "Turismo@";

$novaSenha_n = 1;

$msg = '';
$cor = "class='alert alert-info'";

if($row != null && $row_count > 0){
	if($row['email'] == ''){
 		$msg = 'Seu usúario não tem email, por favor, atualize no registro:';
		$cor = "class='alert alert-warning'";
	}
  
	elseif($row['email'] != $txtEmailT){
 		$msg = 'O email inserido é diferente do cadastrado, por favor, verifique novamente';
 		$cor = "class='alert alert-warning'";
	}
	else{
		$ano = 2022;
		$novaSenha =  "$novaSenha_L$ano";
		/* inserir o numero */
			// the message
	    $msg = "<br><br>" . "Sua nova senha para entrar no TurismoAventura é:  {$novaSenha} Ao fazer o login com a nova senha que você inseriu, você será solicitado a mudá-la para uma senha de sua escolha. TurismoAventura login: https://turismoaventura.com.br/login.php E-MAIL AUTOMÁTICO: Por favor, não responda!";

		$destino = $row['email'];

		$email = $row['email'];

		$emailBody = <<<EOF
<html>
  <head>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <style>

        *{
            font-family: Poppins, sans-serif!important;
        }

        img + div { display:none; }
    </style>
  </head>

    <body>
      <table style="border: 2px solid #bfbfbf;margin-left: auto;margin-right: auto;width: 600px;height: auto;font-size: 13px;color:#e1e1e1;background-color: white;zoom:0.9;" align="center" cellspacing="0" cellpadding="0">
        <tbody>
          <tr align="left">
          <td>
            <table >
              <tr align="right">
                <td>
                <img style="max-width: 15em; max-height: 7.5em; width: auto; height: auto;" src="https://turismoaventura.com.br/img/LogoTurismo.png">
                
                </td>
              </tr>
              <tr>
                <td>
                <br>
                </td>
              </tr>
            </table>
          </td>
          </tr>
          <tr>
          <td style="padding: 1rem!important;">
          <table style="margin-left: auto;margin-right: auto;width: 600px;height: auto; padding-left: 30px;padding-right: 30px;padding-bottom: 30px; font-size: 13px;color:#595959;" align="left" cellspacing="0" cellpadding="0">
            <tr>
            <td>
            <div style="text-align:justify; text-align:justify;font-size: 15px; font-family:Poppins;">
              <span style="font-size: 18px;font-family:Poppins"><b>Prezado(s) Senhor(es),</b><b></b></span><br>
            </div>
            <div style="text-align:justify; text-align:justify; text-align:justify;font-size: 15px; font-family:Poppins;">
              <p style="font-size: 16px;font-family:Poppins;font-weight: 500;color: #7a7a7a;">
              Olá $nome_usuario, Recebemos uma solicitação para restaurar sua senha de acesso em nosso site.
              </p>
              <p style="font-size: 18px;font-family:Poppins;margin-top: 30px">
                <b>Sua senha foi redefinida para: $senha</b>
              </p>
            </div>
            <!--
            <p style="font-size: 17px;font-family:Poppins;color: #6ab99d;margin-top: 30px;font-weight: 500;"> Email:   <b style="color: black"> $txtEmailT</b></p>
            <p style="font-size: 17px;font-family:Poppins;color: #6ab99d;font-weight: 500;margin-bottom: 35px;"> Senha :   <b style="color: black"> Turismo@2022</b></p>
            -->
            <p style="font-size: 12px;font-family:Poppins;text-align:center;"><a style="color:#ffffff;background-color:#6ab99d;border:solid 1px #43a047;width: 50%;border-radius:4px;box-sizing:border-box;text-decoration:none;display:inline-block;font-size:15px;font-weight:500;margin:0;padding:10px 20px;border-color:#43a047;margin-bottom: 29px;" href="https://turismoaventura.com.br/login.php" target=_blank> Clique neste link para ser redirecionado ao sistema.</a></p>
            <br>
            <small>Caso não tenha solicitado a restauração de sua senha, ignorar este email.</small>
            <tr>
            <td>
            <div style="text-align:justify">
              <table id="tblDados" style="border-collapse: collapse !important;font-family: Roboto;font-size: 10px;width: 100%;color:#595959">
              <tr class="columSolicitacao">
                <td style="font-size: 16px;" colspan="2">
                <b>Atenciosamente,</b>
                <br>

                </td>
                <br>
              </tr>
              <tr class="columSolicitacao">
                <td style="font-size: 16px;line-height: 2;" colspan="2">
                <b>TurismoAventura</b>
                </td>
              </tr>

              <tr class="columSolicitacao">
                <td style="font-size: 15px;" colspan="2"><i>Obs: Favor não responder diretamente esta mensagem, pois, este é um e-mail automático do Sistema TurismoAventura.</i></td>
                <br>
              </tr>
              </table>
            </div>
            </td>
            </tr>
          </table>
          </div>
          <br>
        </td>
      </tr>
    </table>
    </td>
  </tr>
</tbody>
</table>
</body>
</html>
EOF;  
    
    $assunto = "Turismo Aventura - Redefinição de senha";
		// Configurações do servidor SMTP
    $smtpServidor = "smtp.titan.email";
    $portaSMTP = 587; // Use 465 para SSL/TLS ou 587 para STARTTLS
    $usuarioSMTP = "contato@turismoaventura.com.br";
    $senhaSMTP = "Tcc@2023";

    // Cabeçalhos do email
    $headers = "From: contato@turismoaventura.com.br\r\n";
    $headers .= "Reply-To: contato@turismoaventura.com.br\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-type: text/html; charset=utf-8\r\n";


    // Configurar a criptografia
    $secureSocketLayer = 'tls'; // 'ssl' para a porta 465, 'tls' para a porta 587

    // Configurar as opções do stream
    $streamOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
        ),
    );

    // Tentar enviar o email
    if (mail($txtEmailT, $assunto, $emailBody, $headers, "-f$usuarioSMTP")) {
    }

		 $msg = "Email enviado com sucesso!" . "<br>" . "As informações da restauração de senha serão enviadas para o endereço de e-mail" . "<b>   " . $row['email'] . "</b>";
 		 $cor = "class='alert alert-success'";
	
		}
 }
 else{
	$msg = "Usuário não encontrado!:";
	$cor = "class='alert alert-danger'";
	
 }


		
$retorno = array('msg' => $msg, 'cor' => $cor);
print (json_encode($retorno));
exit();



?>