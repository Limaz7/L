<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action="" method="post">
        <p>Informe uma temperatura:<input type="number" name="temp"></p>
        <p>Celsius<input type="radio" name="grau" value="1"></p>
        <p>Farenheit<input type="radio" name="grau" value="2"></p>
        <input type="submit" value="Enviar">
</form>
<?php
if($_POST){

    include "a.php";

    $temp = $_POST["temp"]; 
    $grau = $_POST["grau"];

    $msg = temp($temp, $grau);
    echo $msg;
}
?>
</body>
</html>