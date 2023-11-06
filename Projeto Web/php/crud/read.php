<?php 
include 'conecta.php';

$sql = "SELECT * FROM usuarios";
$exec = $pdo->query($sql);

while($reg = $exec->fetch()){
    echo $reg["id_user"] . " - ". $reg["nome"]. " - ". $reg["email"]."<br/>";
    echo "[<a href=formUpdate.php?id=$reg[id]>Atualizar</a>] ";
    echo "[<a href=delete.php?id=$reg[id]>Excluir</a>] ";
    echo "<hr />";
}
?>