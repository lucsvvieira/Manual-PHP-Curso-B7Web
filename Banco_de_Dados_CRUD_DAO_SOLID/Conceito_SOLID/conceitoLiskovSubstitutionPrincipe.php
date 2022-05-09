<?php

class A {

    public function getNome() {
        return "Meu nome é A";
    }

}

class B extends A {
    
    public function getNome() {
        return "Meu nome é B";
    }

}

function impremeNome(A $obj) {
    return $obj->getNome();
}

$objeto1 = new A();
$objeto2 = new B();
echo impremeNome($objeto1).PHP_EOL;
echo impremeNome($objeto2);