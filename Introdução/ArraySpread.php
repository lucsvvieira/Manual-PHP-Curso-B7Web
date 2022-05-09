<?php

$lista1 = ['Lucas', 'Leandro', 'Gabriela'];
$lista2 = ['Julia', 'Nicolas', 'Suellen'];
$lista3 = [...$lista1, 'Pamela', 'Bruno', ...$lista2]; // Editor de texto acusando erro pois o editor não atualizou junto com o PHP

print_r($lista3);