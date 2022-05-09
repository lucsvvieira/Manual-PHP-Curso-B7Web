<?php

$nome = "Lucas";

$nomeCompleto = $nome ?? 'Visitante';
$nomeCompleto .= $sobrenome ?? "";

echo $nomeCompleto;