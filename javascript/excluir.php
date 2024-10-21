<?php 

$id_usuario = $_GET['id_usuario'];

require_once "conexao.php";
$conexao = conectar();
$sql = "DELETE FROM user WHERE id_usuario= '$id_usuario'";
$result = executarSQL($conexao, $sql);
echo json_encode($result);
