<?php

$lista = [
    'nome' => 'Lucas',
    'idade' => 27,
    'atributos' => [
    'forca' => 60,
    'agilidade' => 80,
    'destreza' => 50,
    'vida' => 1000,
    'mana' => 928
    ]
];

$atributos = [
    
];

echo "NOME: " .$lista['nome'].PHP_EOL;
echo "FORÇA: ".$lista['atributos']['forca'].PHP_EOL;
echo "VIDA: " .$lista['atributos']['vida']; 