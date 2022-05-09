<?php
require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDAO = new UsuarioDaoMysql($pdo);

$name = filter_input(INPUT_POST, 'name'); // Recebendo os dados de name do banco de dados
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL); // Recebendo os dados de email do banco de dados executando a validação para verificar se o que foi enviado é realmente um e-mail

if($name && $email) {

    if($usuarioDao->findByEmail($email) === false) {
        $novoUsuario = new Usuario();
        $novoUsuario->setNome($name);
        $novoUsuario->setEmail($email);

        $usuarioDao->add( $novoUsuario );

        header("Location:index.php");
        exit;

    } else {
        header("Location:index.php");
        exit;
    }

} else {
    header("Location: adicionar.php");
    exit;
}