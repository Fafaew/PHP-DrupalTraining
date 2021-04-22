<?php

class Person{
    
    private $_name; 
    
    private $_gender;   
    
    private $_age;

    public function getName() 
    {
        return $this->_name;
    }

    public function setName($name) 
    {
        $this->_name = $name;
    }

    public function getGender() 
    {
        return $this->_gender;
    }

    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function setAge($age)
    {
        $this->_age = $age;
    }
}

?>