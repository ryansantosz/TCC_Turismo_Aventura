<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Destinatário e mensagem
$para = "caio.cesar@itpower.co";
$assunto = "Assunto do Email";
$mensagem = "Este é o corpo do email.";

// Configurações do servidor SMTP
$smtpServidor = "smtp.titan.email";
$portaSMTP = 587; // Use 465 para SSL/TLS ou 587 para STARTTLS
$usuarioSMTP = "contato@turismoaventura.com.br";
$senhaSMTP = "Tcc@2023";

// Cabeçalhos do email
$headers = "From: contato@turismoaventura.com.br\r\n";
$headers .= "Reply-To: contato@turismoaventura.com.br\r\n";
$headers .= "X-Mailer: PHP/" . phpversion();
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";


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
if (mail($para, $assunto, $mensagem, $headers, "-f$usuarioSMTP")) {
    echo "Email enviado com sucesso!";
} else {
    echo "Falha ao enviar o email.";
}
?>
