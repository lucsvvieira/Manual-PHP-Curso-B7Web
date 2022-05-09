<?php
session_start();

if ($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<form action="recebedor.php" method="POST">
    <label for="">
       Qual é o seu Nome?
        <br>
        <input type="text" name="nome">
    </label>
    <br>
    <br>

    <input type="submit" value="Salvar">
</form>
