<?php

// Função que remove o último item de um array
$numeros = [10, 15, 58, 47];

array_pop($numeros);
print_r($numeros);

// Função que remove o primeiro item de um array
$numeros = [10, 15, 58, 47];

array_shift($numeros);
print_r($numeros);

// Função que realiza uma busca dentro de um array
$numeros = [10, 25, 698, 47];

if(in_array(698, $numeros)) {
    echo 'Existe';
} else {
    echo 'Não existe';
}

// Função que retorna se existe o item e qual sua posição dentro do array
$numeros = [10, 25, 698, 47];

$pos = array_search(698, $numeros);
echo $pos;

// Função que ordena um array Ex: Crescente/Descrescente
$numeros = [10, 25, 698, 47];

sort($numeros); // Ordem Crescente
rsort($numeros); // Ordem Decrescente
asort($numeros); // Ordenar mantendo a chave original do item
arsort($numeros); // Ordena em ordem decrescente mantendo a chave original

print_r($numeros);

// Função que transforma um array em uma string
$nomes = ['Lucas', 'Vieira'];

$nome = implode(' ', $nomes);
echo $nome;