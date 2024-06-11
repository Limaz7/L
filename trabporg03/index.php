<?php

include 'db_connect.php';
session_start();

    if(isset($_POST['login'], $_POST['senha'])){
        if ($login = $_POST['login']  and $senha = $_POST['senha']) {
            $_SESSION['user'] = $login and $senha;
            header('location: clientes.php');
        }
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1> Login </h1>

    <form action="" method="post">
        Login:<input type="text" name="login"><br>
        Senha:<input type="password" name="senha"><br>
        <button type="submit" name="btn-entrar"> Entrar </button>
    </form>
</body>
</html>