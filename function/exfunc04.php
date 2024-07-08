<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="post">
        <p>Informe um número:<input type="number" name="d"></p>
        <p>Informe um número:<input type="number" name="m"></p>
        <p>Informe um número:<input type="number" name="a"></p>
        <input type="submit" value="Enviar">
</form>
<?php
if($_POST){

    include "a.php";

    $dia = $_POST["d"]; 
    $mes = $_POST["m"];
    $ano = $_POST["a"];

    $msg = vi($dia, $mes, $ano);
    echo $msg;
}
?>
</body>
</html>