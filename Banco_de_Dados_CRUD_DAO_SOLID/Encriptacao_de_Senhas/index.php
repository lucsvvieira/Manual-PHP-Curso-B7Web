<?php

$senha = '1234';

$hash = password_hash($senha, PASSWORD_DEFAULT);

echo "SENHA ORIGINAL: ".$senha.PHP_EOL;
echo "HASH: ".$hash;