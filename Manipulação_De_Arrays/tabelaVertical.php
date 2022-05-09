<?php

$array = [
    'nome' => 'Lucas',
    'idade' => 27,
    'empresa' => '...',
    'cor' => 'azul',
    'profissao' => 'desenvolvedor'
];

?>

<table border="1">
    <?php foreach($array as $chave => $valor): ?>
        <tr>
            <th><? echo $chave ?></th>
            <td><? echo $valor ?></td>
        </tr>
    <?php endforeach; ?>
</table>