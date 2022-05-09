<?php

// Função que demonstra a data
$data = '2022/04/08';

$time = strtotime($data);

echo date('d / m / Y', $time);
