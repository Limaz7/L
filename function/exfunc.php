<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="post">
        <p>Informe um número:<input type="number" name="n1"></p>
        <p>Informe um número:<input type="number" name="n2"></p>
        <input type="submit" value="Enviar">
</form>
<?php
if($_POST){

    include "a.php";

    $n1 = $_POST["n1"]; 
    $n2 = $_POST["n2"];

    $msg = soma($n1, $n2);
    echo "o valor é: $msg";
}
?>
</body>
</html>