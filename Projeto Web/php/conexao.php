<?php

$usuario = 'turis832_matheus';
$senha = 'matheus0307';
$database = 'turis832_bd_turismo_aventura';
$host = 'br886.hostgator.com.br';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}