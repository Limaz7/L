<?php

$servername = "localhost";
$username = "root";
$password = "";
$db_name = "trabprog03";

$conecta = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()){
    echo "Houve um erro: ".mysqli_connect_error();
}
?>