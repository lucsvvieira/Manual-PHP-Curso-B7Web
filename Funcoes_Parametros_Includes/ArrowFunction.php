<?php

$dizimo = fn($valor) => $valor * 0.1;

$somar = fn(int $n1, int $n2 = 0) => $n1 + $n2;

echo $dizimo(982);