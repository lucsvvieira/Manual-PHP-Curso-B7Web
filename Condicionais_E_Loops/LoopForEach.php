<?php

$ingredientes = [
    'açucar',
    'farinha de trigo',
    'ovo',
    'leite',
    'fermento em pó',
    'corante'
];

echo '<h2>Ingredientes</h2>';

echo '<ul>';
foreach($ingredientes as $ingrediente) {
    echo '<li>'.$ingrediente.'</li>';
}
echo '</ul>';