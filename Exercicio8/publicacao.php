<?php

require_once '/livro.php';

function abrirLivro(Livro $livro) 
{
    $livro->setAberto(true);
    $livro->setPagAtual(1);    
}

function fecharLivro(Livro $livro)
{
    $livro->setAberto(false);

}

function folhear(Livro $livro, $pagina)
{
    $paginaAtual = $livro->getPagAtual();
    $paginaAtual = $paginaAtual + $pagina;
    $livro->setPagAtual($paginaAtual);
    return $livro;
}

function avancarPag(Livro $livro)
{
    $pag = $livro->getPagAtual() + 1;
    $livro->setPagAtual($pag);
    return $livro;
}

function voltarPag(Livro $livro)
{
    $pag = $livro->getPagAtual() -1;
    $livro->setPagAtual($pag);
    return $livro;
}