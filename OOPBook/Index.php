<?php

require_once '/person.php';
require_once '/book.php';
require_once '/bookInterface.php';


function Person()
{
    $person1 = new Person();
    $person1->setName('Name 1');
    $person1->setGender('Gender 1');
    $person1->setAge('Age1');    

    $person2 = new Person();
    $person2->setName('Name 2');
    $person2->setGender('Gender 2');
    $person2->setAge('Age 2');

    $person3 = new Person();
    $person3->setName('Name 3');
    $person3->setGender('Gender 3');
    $person3->setAge('Age 3');

}

function Book()
{

    $books1 = new Book();
    $books1->setTitle('Book 1');
    $books1->setAuthor('Author 1');
    $books1->setTotPages('Total Paginas 1');
    $books1->setActualPage('Pagina Atual 1');
    $books1->setOpened('Opened 1');
    $books1->setReader('Reader 1');

    $books2 = new Book();
    $books2->setTitle('Book 2');
    $books2->setAuthor('Author 2');
    $books2->setTotPages('Total Paginas 2');
    $books2->setActualPage('Pagina Atual 2');
    $books2->setOpened('Opened 2');
    $books2->setReader('Reader 2');

    $books3 = new Book();
    $books3->setTitle('Book 3');
    $books3->setAuthor('Author 3');
    $books3->setTotPages('Total Paginas 3');
    $books3->setActualPage('Pagina Atual 3');
    $books3->setOpened('Opened 3');
    $books3->setReader('Reader 3');

    $books4 = new Book();
    $books4->setTitle('Book 4');
    $books4->setAuthor('Author 4');
    $books4->setTotPages('Total Paginas 4');
    $books4->setActualPage('Pagina Atual 4');
    $books4->setOpened('Opened 4');
    $books4->setReader('Reader 4');
 
}