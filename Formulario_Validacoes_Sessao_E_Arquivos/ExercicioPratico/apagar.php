<?php
session_start();
$_SESSION['nome'] = '';

header("Location: login.php");
exit;

?>