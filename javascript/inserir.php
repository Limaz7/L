<?php

require_once "conexao.php";
$conexao = conectar();

$usuario = json_decode(file_get_contents("PHP://input"));
//var_dump($usuario); die;

//echo $usuario->$id_usuario;

if ($usuario->id_usuario == "") {
        $sql = "INSERT INTO user(nome, email, senha) 
        VALUES 
        (
        '$usuario->nome',
        '$usuario->email', 
        '$usuario->senha')";
        executarSQL($conexao, $sql);
        $usuario->id_usuario = mysqli_insert_id($conexao);
} else {
        $sql = "UPDATE user SET
                nome='$usuario->nome',
                email='$usuario->email',
                senha='$usuario->senha'
                WHERE id_usuario = $usuario->id_usuario";
        executarSQL($conexao, $sql);
}
echo json_encode($usuario);
