<?php

header("Access-Control-Allow-Origin: *"); // Para permitir que outros sites requisitem nossa API
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS"); // Permitir todos os métodos de requisição que quisermos que ele permita, por padrão todo o site permite GET e POST
header("Content-Type: application/json");// Avisando que o retorno que tivermos sempre será um JSON
echo json_encode($array); // Função que transforma array em JSON
exit;