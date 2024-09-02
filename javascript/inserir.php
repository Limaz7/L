<?php

require_once "conexao.php";
$conexao = conectar();

$usuario = json_decode(file_get_contents("PHP://input"));
var_dump($usuario); die;

$sql = "INSERT INTO user(id_usuario, nome, email, senha) 
        VALUES '$id_usuario', '$nome', '$email', '$senha'";

$result = mysqli_query($conexao, $sql);
