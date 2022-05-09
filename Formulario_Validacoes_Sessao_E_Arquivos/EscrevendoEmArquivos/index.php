<?php
$texto = file_get_contents('texto.txt');
$texto .= "\nLucas Vieira";
file_put_contents('texto.txt', $texto);