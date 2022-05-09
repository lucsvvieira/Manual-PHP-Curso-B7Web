<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

array_splice($array, 1, 1, ['K', 'O']); // Remove itens do proprio array e adiciona outro item no lugar do removido

print_r($array);