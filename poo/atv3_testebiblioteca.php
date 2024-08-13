<?php

include ('atv3_livro.php');
include ('atv3_biblioteca.php');


$biblioteca = new Biblioteca("Biblioteca IFFar");
$livro1 = new Livro("PHP Programando com orientação a objetos", "Pablo Dall'Oglio", 2018);
$livro2 = new Livro("Algoritmos - Teoria e Prática", "Thomas H. Cormen", 2012);
$livro3 = new Livro("Entendendo Algoritimos", "Aditya Y. Bhargava", 2017);

$biblioteca->adicionarLivro($livro1);
$biblioteca->adicionarLivro($livro2);
$biblioteca->adicionarLivro($livro3);

echo "<br>Lista de livros na biblioteca:<br> <br>";
$biblioteca->listarLivros($livro1);

echo "<br>Empréstimo de livro:<br> <br>";
$biblioteca->emprestarLivro("Algoritimos - Teoria e Prática");
$biblioteca->emprestarLivro("Entendendo Algoritimos");

echo "<br>Listar livros após empréstimos:<br> <br>";
$biblioteca->listarLivros($livros);

echo "<br>Devolução de livro:<br>";
$biblioteca->devolverLivro("Entendendo Algoritomos");

echo "<br>Lista de livros após devolução:<br>";
$biblioteca->listarLivros($livros);