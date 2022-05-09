<?php

// Função que informa em que posição se encontra alguma letra ou palavra na string
$nomeCompleto = 'Lucas Vieira';

$posicao = strpos($nomeCompleto, 'V');
echo $posicao;

// Transformar a primeira letra em maiúscula
$nomeCompleto = 'lucas';

echo ucfirst($nomeCompleto);

// Transformar em maiúsculo as primeiras letras de cada palavra
$nomeCompleto = 'lucas vieira';

echo ucwords($nomeCompleto);

// Função que transforma cada palavra de uma string em um array
$nomeCompleto = 'lucas vieira';

$nomes = explode(' ', $nomeCompleto);
print_r($nomes);

// Função que faz a formatação de números
$numeros = 123548.23;

echo 'R$ '.number_format($numeros, 2, ',', '.');