<?php

$db_host = 'localhost';
$db_name = 'devsnotes';
$db_user = 'root';
$db_pass = '';

$pdo = new PDO("mysql:dbname=$db_name;host=$db_host", $db_user, $db_pass);

$array = [ // Estrutura padrão de resposta, todas as requisições respeitaram esta estrutura
    'error' => '', // Se houver um erro, será jogado aqui
    'result' => [] // Se houver resultado, será jogado aqui
];