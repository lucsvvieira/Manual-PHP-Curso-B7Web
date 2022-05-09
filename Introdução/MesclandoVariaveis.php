<?php
// Modos de concatenar variáveis

// 1° Modo
$nome = 'Lucas';
$sobrenome = 'Vieira';
$idade = 27;

$nomeCompleto = $nome . " " . $sobrenome;
echo $nomeCompleto;

// 2° Modo
$nome = 'Lucas';
$sobrenome = 'Vieira';
$idade = 27;

$frase = "$nome $sobrenome tem $idade anos"; // Utilizar aspas duplas para que o editor de texto entenda que são váriaveis, se utilizar aspas simples ele entenderá como algo literal(uma string)
echo $frase;

// 3° Modo
$nome = 'Lucas';
$sobrenome = 'Vieira';

$nomeCompleto = $nome;
$nomeCompleto .= $sobrenome; // Pode fazer concatenação com . + - * /
echo $nomeCompleto;