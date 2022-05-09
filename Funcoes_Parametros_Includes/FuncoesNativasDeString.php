<?php

// Função que retira todos os espaços extras que um usuário possa ter colocado em um formulário
$nome = '         Lucas         ';

echo trim($nome);

// Função que conta quantos caracteres possuem a string
$nomeSujo = ' Lucas ';
$nomeLimpo = trim($nomeSujo);

echo "NOME SUJO: ".$strlen($nomeSujo).PHP_EOL;
echo "NOME LIMPO: ".$strlen($nomeLimpo);


// Função que transforma toda a string em minúscula
$nome = 'Lucas Vieira';

echo strtolower($nome);

// Função que transforma toda a string em maiúscula
$nome = 'Lucas Vieira';

echo strtoupper($nome);

// Função que substitui a palavra procurada e substitui por outra
$nome = 'Lucas Oliveira';

$nomeAlterado = str_replace('Oliveira', 'Vieira', $nome);
echo $nomeAlterado;

// Função que pega partes de uma string
$nomeCompleto = 'Lucas Vieira';

$nome = substr($nomeCompleto, 0, 2);