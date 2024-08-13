<?php

class Livro
{
    private $titulo;
    private $autor;
    private $anoPublicacao;
    private $disponivel;

    public function __construct($titulo, $autor, $anoPublicacao)
    {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->anoPublicacao = $anoPublicacao;
        $this->disponivel = true;
    }

    public function emprestar()
    {
        if ($this->disponivel == true) {
            $this->disponivel = false;
            echo "O" . $this->titulo . "foi emprestado";
        }
    }

    public function devolver()
    {
        if ($this->disponivel == false) {
            $this->disponivel = true;
            echo "O" . $this->titulo . "foi devolvido";
        }
    }

    public function exibirDetalhes()
    {
        echo "Titulo: " . $this->titulo;
        echo "Autor: " . $this->autor;
        echo "Ano de publicação: " . $this->anoPublicacao;
        echo "Disponível: " . $this->disponivel;
    }

    public function exibirTitulo()
    {
        echo "Titulo do livro:" . $this->titulo;
    }
}
