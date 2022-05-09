<?php

class Post { // Criando a classe
    public $likes = 0;
    public $comments = [];
    public $author;

    public function __construct($qtLikes) { // Criando o método construtor
        $this->likes = $qtLikes;
    }

    public function aumentarLike() { // Criando um método
        $this->likes++;
    } 
}

$post1 = new Post(25);
$post2 = new Post(10);

echo "POST 1: ".$post1->likes.PHP_EOL;
echo "POST 2: ".$post2->likes.PHP_EOL;