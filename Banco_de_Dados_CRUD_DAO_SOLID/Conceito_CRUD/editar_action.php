<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'id'); // Recebendo os dados de id do banco de dados
$name = filter_input(INPUT_POST, 'name'); // Recebendo os dados de name do banco de dados
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // Recebendo os dados de email do banco de dados executando a validação para verificar se o que foi enviado é realmente um e-mail

if($id && $name && $email) {
    $usuario = new Usuario();
    $usuario->setId($id);
    $usuario->setNome($name);
    $usuario->setEmail($email);

    $usuarioDao->update( $usuario );

    header("Location: index.php");
    exit;

} else {
    header("Location: editar.php?id=".$id);
    exit;
}