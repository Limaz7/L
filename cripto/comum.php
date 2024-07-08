<?php

session_start();


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comum</title>
</head>
<body>
    <h1> Bem-vindo <?php echo $_SESSION['nome']; echo '<br> Nível: '; echo $_SESSION['nivel'] ?></h1>
</body>
</html>