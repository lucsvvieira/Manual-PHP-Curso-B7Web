<?php

$texto = file_get_contents('texto.txt'); // Lendo um texto que está salvo na máquina, mas o comando lê arquivos que estão salvos em outros servidores também através de sua URL

$texto = explode('\n', $texto); // Quebrando o texto por linha

echo "LINHAS: ".count($texto);