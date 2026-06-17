<?php

class Funcionario {
    public $nome;
    public $salario;

    public function __construct($nome, $salario) {
        $this->nome = $nome;
        $this->salario = $salario;
    }

    public function calcularBonus() {
        return $this->salario * 0.10;
    }

    public function exibirDados() {
        echo "Nome: " . $this->nome . "<br>";
        echo "Cargo: " . get_class($this) . "<br>";
        echo "Salário: " . $this->salario . "<br>";
    }
}

class Gerente extends Funcionario {

    public function calcularBonus() {
        return $this->salario * 0.20;
    }

}

class Desenvolvedor extends Funcionario {

    public function calcularBonus() {
        return $this->salario * 0.15;
    }

}


$gerente = new Gerente("João", 10000);
$desenvolvedor = new Desenvolvedor("Maria", 8000);

$gerente->exibirDados();
echo "Bônus: " . $gerente->calcularBonus() . "<br><br>";

$desenvolvedor->exibirDados();
echo "Bônus: " . $desenvolvedor->calcularBonus() . "<br><br>";


$funcionarios = array(
    new Gerente("Carlos", 12000),
    new Desenvolvedor("Ana", 9000),
    new Gerente("Pedro", 15000)
);

foreach ($funcionarios as $funcionario) {
    $funcionario->exibirDados();
    echo "Bônus: " . $funcionario->calcularBonus() . "<br><br>";
}

?>