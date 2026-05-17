<?php

class ContaBancaria {

    private $titular;
    private $saldo = 0;

    public function setTitular($titular) {

        if (!empty(trim($titular))) {
            $this->titular = $titular;
        } else {
            echo "Titular inválido!<br>";
        }
    }

    public function getTitular() {
        return $this->titular;
    }

    public function depositar($valor) {

        if ($valor > 0) {
            $this->saldo += $valor;
            echo "Depósito realizado com sucesso!<br>";
        } else {
            echo "Valor de depósito inválido!<br>";
        }
    }

    public function sacar($valor) {

        if ($valor <= 0) {
            echo "Valor inválido para saque!<br>";
        }
        elseif ($valor > $this->saldo) {
            echo "Saldo insuficiente!<br>";
        }
        else {
            $this->saldo -= $valor;
            echo "Saque realizado com sucesso!<br>";
        }
    }

    public function consultarSaldo() {

        echo "Saldo atual: R$ " .
        number_format($this->saldo, 2, ",", ".") . "<br>";
    }
}



$conta = new ContaBancaria();

$conta->setTitular("Carlos");

$conta->depositar(1000);

$conta->sacar(300);

$conta->sacar(900);

$conta->consultarSaldo();

?>