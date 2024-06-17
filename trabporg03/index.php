<?php

session_start();

if ($_POST){
    if(isset($_POST['batata'])){
    $batata = $_POST['batata'];
    $carro = array("batata" => $batata);
    $_SESSION["carrinho"][] = $carro; 
    header('location: carro.php');
    } elseif(!isset($_SESSION["carrinho"])){
        $_SESSION["carrinho"] = array();
    } 
}

  





?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATIVIDADE</title>
</head>
<body>
<form method="post" action="">

    <h1> Coloca o bgl no carro </h1>

       <label for="batata">Batata </label>
       <input type="hidden" id="batata" name="batata">  <br>
       <input type="submit" value="Enviar"> <br><br>

       <label for="maca">Maça </label>
       <input type="hidden" id="maca" name="maca">  <br>
       <input type="submit" value="Enviar"> <br><br>

       <label for="laranja">Laranja </label>
       <input type="hidden" id="laranja" name="laranja">  <br>
       <input type="submit" value="Enviar"> <br><br>

       <label for="berga">Bergamota </label>
       <input type="hidden" id="berga" name="berga">  <br>
       <input type="submit" value="Enviar"> <br><br>

       <label for="alho">Alho </label>
       <input type="hidden" id="alho" name="alho">  <br>
       <input type="submit" value="Enviar"> <br><br>
 
</form>
</body>
</html>