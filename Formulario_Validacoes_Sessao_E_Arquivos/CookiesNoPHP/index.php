<?php
session_start();
require('header.php');

if($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}

?>

<a href="apagar.php">Apagar Cookie</a>

<form method="POST" action="recebedor.php">

<label>
    Nome:
    <br/>
    <input type="text" name="name">
</label>
<br/>
<br/>

<label>
    Email:
    <br/>
    <input type="text" name="email">
</label>
<br/>
<br/>

<label>
    Idade:
    <br/>
    <input type="text" name="idade">
</label>
<br/>
<br/>

<input type="submit" value="Enviar">

</form>