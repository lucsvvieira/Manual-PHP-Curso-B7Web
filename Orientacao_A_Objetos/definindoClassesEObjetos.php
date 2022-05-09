<?php

class Post { // Criando a classe
    public $likes = 0;
    public $comments = [];
    public $author;
}

$post1 = new Post(); // Criando o objeto
$post1->likes = 3;

$post2 = new Post();
$post2->likes = 10;

echo "POST 1: ".$post1->likes.PHP_EOL;
echo "POST 2: ".$post2->likes.PHP_EOL;