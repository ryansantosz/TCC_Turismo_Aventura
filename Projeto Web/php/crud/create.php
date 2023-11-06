<?php 
include 'conecta.php';

$nome = $_POST["nome"];
$email = $_POST["email"];

$sql = "INSERT INTO usuarios (nome,email)value("$nome","$email")";
$exec = $pdo->query($sql);

?>