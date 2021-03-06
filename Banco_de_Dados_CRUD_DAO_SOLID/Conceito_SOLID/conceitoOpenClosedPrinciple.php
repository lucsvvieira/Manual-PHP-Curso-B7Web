<?php

// Conceito que solicita que um objeto esteja aberto para extensão e fechado para modificações

interface Remuneravel {
    public function remuneracao();
}

class ContratoClt implements Remuneravel {

    public function remuneracao() {}

}

class Estagio implements Remuneravel {

    public function remuneracao() {}

}
class ContratoPj implements Remuneravel {

    public function remuneracao() {}

}

class ContratoInternacional implements Remuneravel {

    public function remuneracao() {}

}

class FolhaDePagamento {

    public function calcular( Remuneravel $funcionario ) {
        return $funcionario->remuneracao();
    }

}