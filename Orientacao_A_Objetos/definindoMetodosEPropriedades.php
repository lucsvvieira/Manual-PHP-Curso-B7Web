<?php

class Post { // Criando a classe
    public $likes = 0;
    public $comments = [];
    public $author;

    public function aumentarLike() { // Criando um método
        $this->likes++;
    } 
}

$post1 = new Post(); // Criando o objeto
$post1->aumentarLike(); // Utilizando o método no objeto $post1
$post1->aumentarLike();

$post2 = new Post();
$post2->aumentarLike();

echo "POST 1: ".$post1->likes.PHP_EOL;
echo "POST 2: ".$post2->likes.PHP_EOL;