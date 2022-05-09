<?php

$array = [
    'nome' => 'Lucas',
    'idade' => 27,
    'empresa' => '...',
    'cor' => 'azul',
    'profissao' => 'desenvolvedor'
];

if(key_exists('profissao', $array)){
    $profissao = $array['profissao'];
    echo $profissao;
} else {
    echo "Não existe a chave profissão.";
}