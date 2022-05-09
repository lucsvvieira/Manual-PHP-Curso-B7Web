<?php

// Função que informa quantos itens possuem no array
$lista = ['nome1', 'nome2', 'nome3'];

echo 'Total: '.count($lista);

// Função que pega a diferença entre 2 arrays e gera um novo array com os itens que estão na primeira lista e que nao estão na segunda lista
$lista = ['Lucas', 'Leonardo', 'Gabriela', 'Pamela', 'Fabio'];

$aprovados = ['Lucas', 'Gabriela', 'Fabio'];
$reprovados = array_diff($lista, $aprovados);

print_r($reprovados);

// Função que filtra alguma coisa no array
$numeros = [10, 20, 50, 90, 200];

$filtrados = array_filter($numeros, function($item){
    if($item < 30) {
        return true;
    } else {
        return false;
    }
});

print_r($filtrados);

// Função que executa alguma ação no array
$numeros = [10, 20, 50, 90, 200];

$dobrados = array_map(function($item){
    return $item * 2;
}, $numeros);

print_r($dobrados);