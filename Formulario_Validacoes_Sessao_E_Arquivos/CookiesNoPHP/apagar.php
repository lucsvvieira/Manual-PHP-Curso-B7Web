<?php

setcookie('nome', '', time() - 3600); // Para apagar cookie, setar ele com o tempo de expiração no passado

header("Location: index.php");
exit;