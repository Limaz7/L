<?php

require_once "conexao.php";
$conexao = conectar();

$usuario = json_decode(file_get_contents("PHP://input"));
//var_dump($usuario); die;

//echo $usuario->$id_usuario;
$sql = "UPDATE user SET
        nome='$usuario->nome',
        email='$usuario->email',
        senha='$usuario->senha'
        WHERE id_usuario = $usuario->id_usuario";
executarSQL($conexao, $sql);
echo json_encode($usuario);
