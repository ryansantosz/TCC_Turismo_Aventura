<?php
if(isset($_POST['email']) || isset($_POST['senha'])) {

include 'conexao.php';

$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";
$exec = $pdo->query($sql); 
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Acesse sua conta</h1>
    <form action="" method="POST">
        <p>
            <label>E-mail</label>
            <input type="text" name="email" id="email">
        </p>
        <p>
            <label>Senha</label>
            <input type="password" name="senha" id="senha">
        </p>
        <p>
            <button type="submit">Entrar</button>
        </p>
    </form>
</body>
</html>