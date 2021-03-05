<?php

class Pessoa{
    
    private $_nome; 
    
    private $_sexo;   
    
    private $_idade;

    public function getNome() 
    {
        return $this->_nome;
    }

    public function setNome($nome) 
    {
        $this->_nome = $nome;
    }

    public function getSexo() 
    {
        return $this->_sexo;
    }

    public function setSexo($sexo)
    {
        $this->_sexo = $sexo;
    }

    public function getIdade()
    {
        return $this->_idade;
    }

    public function setIdade($idade)
    {
        $this->_idade = $idade;
    }
}

?>