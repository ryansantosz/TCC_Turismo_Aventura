<?php
define('HOST', 'br886.hostgator.com.br');
define('USUARIO', 'turis832_matheus');
define('SENHA', 'matheus0307');
define('DB', 'turis832_bd_turismo_aventura');

 $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possivel conectar');

