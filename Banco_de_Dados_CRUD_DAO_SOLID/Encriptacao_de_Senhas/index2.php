<?php

$hash = '...';
$senha = '12345';

if(password_verify($senha, $hash)) {
    echo 'Senha correta!';
} else {
    echo 'Senha errada!';
}