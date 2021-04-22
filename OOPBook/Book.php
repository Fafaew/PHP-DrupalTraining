<?php

class Book implements Publication
 
{    
    private $_title;    
    
    private $_author;    
   
    private $_totPages;    
    
    private $_actualPage;    
    
    private $_opened;    
    
    private $_reader;


    public function __construct(
        string $title,
        string $author,
        int $totPages,
        int $acutalPage,
        bool $opened,
        Pessoa $reader
    ) {
        $this->_title = $title;
        $this->_author = $author;
        $this->_totPages = $totPages;
        $this->_actualPage = $acutalPage;
        $this->_opened = $opened;
        $this->_reader = $reader;
    }

    public function getTitle() 
    {
        return $this->_title;
    }

    public function setTitle($title) 
    {
        $this->_title = $title;
    }

    public function getAutor() 
    {
        return $this->_author;
    }

    public function setAutor($author)
    {
        $this->_author = $author;
    }

    public function getTotPages()
    {
        return $this->_totPages;
    }

    public function setTotPages($totPages)
    {
        $this->_totPages = $totPages;
    }

    public function getPagAtual()
    {
        return $this->_actualPage;
    }

    public function setPagAtual($acutalPage)
    {
        $this->acutalPage = $acutalPage;
    }
    public function getOpened()
    {
        $this->_opened;

    }

    public function setOpened($opened)
    {
        $this->_opened = $opened;
    }
    public function getReader()
    {
        return $this->_reader;
    }

    public function setReader($reader)
    {
        $this->_reader = $reader;
    }

    public function openBook() 
    {
        return 'Book opened';
    }

    public function closeBook() 
    {
        return 'Book closed';
    }

    public function fwdPage() 
    {
        $this->_actualPage++;
        return 'Actual Page: '.$this->_actualPage;
    }
    
    public function backPage() 
    {
        $this->_actualPage--;
        return 'Página atual: '.$this->_actualPage;
    }
}

?>
