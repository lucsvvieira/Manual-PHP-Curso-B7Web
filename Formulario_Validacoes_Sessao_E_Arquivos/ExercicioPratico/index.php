<?php
session_start();

if ($_SESSION['nome']) {
    echo "Olá, ".$_SESSION['nome'].' - '."<a href='apagar.php'>Sair</a>";
}else {
    header("Location: login.php");
}
?>