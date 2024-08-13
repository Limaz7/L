<?php

session_start();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá</title>
</head>
<body>
    Bem-vindo! <?php echo $_SESSION['nome']; ?> <br>
    <a href="logout.php">Sair</a>
</body>
</html>