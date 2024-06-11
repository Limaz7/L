<?php

session_start();

if($_SESSION['carrinho'] [0] == true){
    session_unset();
}

if($_SESSION['carrinho'] [1] == true){
    session_unset();
}

?>