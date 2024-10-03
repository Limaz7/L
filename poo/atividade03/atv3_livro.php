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
            echo "O {$this->titulo} foi emprestado <br>";
        }
    }

    public function devolver()
    {
        if ($this->disponivel == false) {
            $this->disponivel = true;
            echo "O {$this->titulo} foi devolvido <br>";
        }
    }

    public function exibirDetalhes()
    {
        echo "Titulo: " . $this->titulo . " ";
        echo "Autor: " . $this->autor . " ";
        echo "Ano de publicação: " . $this->anoPublicacao . " ";
        echo "Status: " . ($this->disponivel == true ? 'Disponivel' : 'Indisponivel') .  "<br>";
    }

    public function exibirTitulo()
    {
        return $this->titulo;
    }
}
