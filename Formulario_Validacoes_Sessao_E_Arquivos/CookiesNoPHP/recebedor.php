<?php
session_start();

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$nome = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_VALIDATE_INT);

if($nome && $email && $idade) {

    $expiracao = time() + (86400 * 30); 
    setcookie('nome', $nome, $expiracao); // Setando um cookie nome para a variavel $nome com duração de 30 dias

    echo 'Nome: '.$nome."<br/>";
    echo 'Email: '.$email."<br/>";
    echo 'Idade: '.$idade;

} else {
    $_SESSION['aviso'] = 'Preencha os itens corretamente!';

    header("Location: index.php");
    exit;
}