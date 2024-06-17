<?php

session_start();

if(!isset($_SESSION['user'])){
    header('location: index.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clientes</title>
</head>
<body>
    <h1> Login efetuado com sucesso </h1>
    <H1> <a href="logout.php"> sair </a> </h1>
</body>
</html>