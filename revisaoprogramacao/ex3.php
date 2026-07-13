<?php

abstract class Funcionario {

    protected string $nome;
    protected string $departamento;

    public function __construct(string $nome, string $departamento){
        $this->nome = $nome;
        $this->departamento = $departamento;
    }

    abstract public function calcularSalario(): float;

    public function apresentar(): string{
        return $this->nome .
        " | " .
        $this->departamento .
        " | Salário: R$ " .
        number_format($this->calcularSalario(),2,'.','');
    }
}

class CLT extends Funcionario{

    private float $salarioBase;

    public function __construct(string $nome, string $departamento, float $salarioBase){
        parent::__construct($nome,$departamento);
        $this->salarioBase = $salarioBase;
    }

    public function calcularSalario(): float{
        return $this->salarioBase * 1.0833;
    }
}

class Freelancer extends Funcionario{

    private float $valorHora;
    private int $horasTrabalhadas;

    public function __construct(
        string $nome,
        string $departamento,
        float $valorHora,
        int $horasTrabalhadas
    ){
        parent::__construct($nome,$departamento);
        $this->valorHora = $valorHora;
        $this->horasTrabalhadas = $horasTrabalhadas;
    }

    public function calcularSalario(): float{
        return $this->valorHora * $this->horasTrabalhadas;
    }
}

$f1 = new CLT("Ana Silva","RH",5000);
$f2 = new Freelancer("Carlos Melo","TI",60,80);

echo $f1->apresentar() . PHP_EOL;
echo $f2->apresentar();