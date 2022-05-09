<?php

class Calculadora {

    public $resultado = 0;

    public function add($soma) {
        $this->$resultado += $soma;
    }

    public function sub($subtraia) {
        $this->$resultado -= $subtraia;
    }

    public function multiply($multiplica) {
        $this->$resultado *= $multiplica; 
    }

    public function divide($divida) {
        $this->$resultado /= $divida;
    }

    public function total() {
        return $this->resultado;
    }

    public function clear() {
        $this->resultado = 0;
    }
}