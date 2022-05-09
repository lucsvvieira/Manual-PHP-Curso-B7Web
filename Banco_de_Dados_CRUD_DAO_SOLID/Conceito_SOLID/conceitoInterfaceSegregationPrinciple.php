<?php

// Conceito que diz que basicamente em uma interface temos que ter apenas os métodos essenciais que vão ser utilizados pela classe que estão implementando eles

interface Aves {
    public function setLocation($lat, $lng);
    public function render();
}

interface AvesQueVoam extends Aves {
    public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam {
    public function setLocation($lat, $lng) {}
    public function setAltitude($alt) {}
    public function render() {}
}

class Pinguim implements Aves {
    public function setLocation($lat, $lng) {}
    public function render() {}
}