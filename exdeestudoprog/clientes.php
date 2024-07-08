<?php

session_start();

$name = $_SESSION['nome'];

if(!isset($_SESSION['nome'])){
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
    <h1> Bem vindo <?php echo $name; ?> </h1>
    <H1> <a href="logout.php"> sair </a> </h1>
</body>
</html>