<?php
rename('texte.txt', 'teste2.txt'); // renomear arquivo, recebe 2 parâmetros, primeiro é o caminho até o arquivo quer renomear e o segundo é o novo nome

rename('teste2.txt', 'nomeDaPasta/teste2.txt'); // Comando para mover para outros diretórios

copy('pastaDeOrigem/teste.txt', 'copiaDoDestino'); // Criando Copias do arquivo