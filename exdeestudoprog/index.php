<?php

if(isset($_POST['submit'])){

    session_start();

    $_SESSION['nome'] = $_POST['name'];

    echo $_SESSION['nome']; 

    header('location: clientes.php');

}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">

        Nome: <input type="text" name="name"> <br><br>
        <input type="submit" name="submit" value="Enviar">

    </form>
</body>
</html>