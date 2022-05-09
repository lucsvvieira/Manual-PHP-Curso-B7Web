<?php

$imagem = imagecreatetruecolor(300, 300); // criando variável da imagem Setando largura e altura da mesma 

$cor = imagecolorallocate($imagem, 255, 0, 0); // setando cor na variável imagem em formato rgb
imagefill($imagem, 0, 0, $cor); // preenchimento da imagem setando inicio do eixo x e y, preenchendo a cor com a variável $cor

header("Content-type: image/jpeg"); // Exibindo imagem na tela
imagejpeg($image, null, 100); // Informando onde imagem será salva e qual será a qualidade da imagem