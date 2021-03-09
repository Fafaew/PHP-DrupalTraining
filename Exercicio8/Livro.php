<?php

class Livro implements Publicacao
 
{    
    private $_titulo;    
    
    private $_autor;    
   
    private $_totPaginas;    
    
    private $_pagAtual;    
    
    private $_aberto;    
    
    private $_leitor;


    public function __construct(
        string $titulo,
        string $autor,
        int $totPaginas,
        int $pagAtual,
        bool $aberto,
        Pessoa $leitor
    ) {
        $this->_titulo = $titulo;
        $this->_autor = $autor;
        $this->_totPaginas = $totPaginas;
        $this->_pagAtual = $pagAtual;
        $this->_aberto = $aberto;
        $this->_leitor = $leitor;
    }

    public function getTitulo() 
    {
        return $this->_titulo;
    }

    public function setTitulo($titulo) 
    {
        $this->_titulo = $titulo;
    }

    public function getAutor() 
    {
        return $this->_autor;
    }

    public function setAutor($autor)
    {
        $this->_autor = $autor;
    }

    public function getTotPaginas()
    {
        return $this->_totPaginas;
    }

    public function setTotPaginas($totPaginas)
    {
        $this->_totPaginas = $totPaginas;
    }

    public function getPagAtual()
    {
        return $this->_pagAtual;
    }

    public function setPagAtual($pagAtual)
    {
        $this->pagAtual = $pagAtual;
    }
    public function getAberto()
    {
        $this->_aberto;

    }

    public function setAberto($aberto)
    {
        $this->_aberto = $aberto;
    }
    public function getLeitor()
    {
        return $this->_leitor;
    }

    public function setLeitor($leitor)
    {
        $this->_leitor = $leitor;
    }

    public function abrirLivro() 
    {
        return 'Livro aberto';
    }

    public function fecharLivro() 
    {
        return 'Livro fechado';
    }

    public function avancarPag() 
    {
        $this->_pagAtual++;
        return 'Página atual: '.$this->_pagAtual;
    }
    
    public function voltarPag() 
    {
        $this->_pagAtual--;
        return 'Página atual: '.$this->_pagAtual;
    }
}

?>
