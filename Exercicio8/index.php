<?php

require_once '/pessoa.php';
require_once '/livro.php';
require_once '/livroInterface.php';


function Pessoa()
{
    
    $pessoa1 = new Pessoa();
    $pessoa1->setNome('Nome 1');
    $pessoa1->setSexo('Sexo 1');
    $pessoa1->setIdade('Idade1');
    

    $pessoa2 = new Pessoa();
    $pessoa2->setNome('Nome 2');
    $pessoa2->setSexo('Sexo 2');
    $pessoa2->setIdade('Idade 2');

    $pessoa3 = new Pessoa();
    $pessoa3->setNome('Nome 3');
    $pessoa3->setSexo('Sexo 3');
    $pessoa3->setIdade('Idade 3');

}

function Livro()
{

    $livros1 = new Livro();
    $livros1->setTitulo('Livro 1');
    $livros1->setAutor('Autor 1');
    $livros1->setTotPaginas('Total Paginas 1');
    $livros1->setPagAtual('Pagina Atual 1');
    $livros1->setAberto('Aberto 1');
    $livros1->setLeitor('Leitor 1');

    $livros2 = new Livro();
    $livros2->setTitulo('Livro 2');
    $livros2->setAutor('Autor 2');
    $livros2->setTotPaginas('Total Paginas 2');
    $livros2->setPagAtual('Pagina Atual 2');
    $livros2->setAberto('Aberto 2');
    $livros2->setLeitor('Leitor 2');

    $livros3 = new Livro();
    $livros3->setTitulo('Livro 3');
    $livros3->setAutor('Autor 3');
    $livros3->setTotPaginas('Total Paginas 3');
    $livros3->setPagAtual('Pagina Atual 3');
    $livros3->setAberto('Aberto 3');
    $livros3->setLeitor('Leitor 3');

    $livros4 = new Livro();
    $livros4->setTitulo('Livro 4');
    $livros4->setAutor('Autor 4');
    $livros4->setTotPaginas('Total Paginas 4');
    $livros4->setPagAtual('Pagina Atual 4');
    $livros4->setAberto('Aberto 4');
    $livros4->setLeitor('Leitor 4');

    
}