Conceito SOLID

S - Single responsibility Principe (Princípio da responsabilidade única)
O - Open-Closed Principle (Princípio Aberto-Fechado)
L - Liskov Substitution Principe (Princípio da substituição Liskov)
I - Interface Segregation Principle (Princípio da Segregação da Interface)
D - Dependency Inversion Principle (Princípio da inversão da dependência)


<?php

class Usuario { // Classe com a responsabilidade de lidar com as informações do usuário

    public function setNome() {}    
    public function getNome() {}    

}

class UsuarioDb { // Classe relacionada ao usuário também, porém com a responsabilidade de tratar sobre manipulações no banco de dados

    public function add(Usuario $u) {} // Juntando as classes por meio de injeção de dependência
    public function update(Usuario $u) {}
    public function delete($id) {}

}