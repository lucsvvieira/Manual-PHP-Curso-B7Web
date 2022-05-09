<h2>Lista de compras:</h2>
<br>
<h3>Novo item:</h3>
<form action="recebe.php" method="POST">
    <input type="text" name="produto" autocomplete="off">
    <button>Adicionar item</button>
</form>
<h3>Items:</h3>
<ul>
    <?php
        $lista = file_get_contents('carrinho.txt'); //busca o que está no carrinho
        $lista = explode("\n", $lista); //monta o array

        foreach ($lista as $item) {
            if($item != '') {
                echo "<li>" . $item . "</li>";
            }
        }

    ?>
</ul>