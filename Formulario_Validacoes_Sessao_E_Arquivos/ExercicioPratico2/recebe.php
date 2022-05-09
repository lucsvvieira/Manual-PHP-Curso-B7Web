<?php
$produto = filter_input(INPUT_POST, 'produto', FILTER_SANITIZE_SPECIAL_CHARS);
if ($produto != '') {
    $lista = file_get_contents('carrinho.txt');
    if($lista != '') {
        $lista .= "\n";
    }
    $lista .= $produto;
    file_put_contents('carrinho.txt', "$lista");
}

header('Location: index.php');
?>