<?php

require_once "conexao.php";
$conexao = conectar();

$usuario = json_decode(file_get_contents("PHP://input"));
//var_dump($usuario); die;

//echo $usuario->$id_usuario;

$sql = "INSERT INTO user(nome, email, senha) 
        VALUES 
        (
        '$usuario->nome',
        '$usuario->email', 
        '$usuario->senha')";

$result = mysqli_query($conexao, $sql);

$usuario->id_usuario = mysqli_insert_id($conexao);
echo json_encode($usuario);
