<?php

abstract class Veiculo{

    public function __construct(
        protected string $marca,
        protected int $ano
    ){}

    abstract public function tipo(): string;

    public function apresentar(): string{
        return $this->tipo() . ": " . $this->marca . " (" . $this->ano . ")";
    }
}

class Carro extends Veiculo{

    public function __construct(
        string $marca,
        int $ano,
        private int $portas
    ){
        parent::__construct($marca,$ano);
    }

    public function tipo(): string{
        return "Carro";
    }

    public function apresentar(): string{
        return parent::apresentar() . " ({$this->portas} portas)";
    }
}

class Moto extends Veiculo{

    public function __construct(
        string $marca,
        int $ano,
        private int $cilindrada
    ){
        parent::__construct($marca,$ano);
    }

    public function tipo(): string{
        return "Moto";
    }

    public function apresentar(): string{
        return parent::apresentar() . " ({$this->cilindrada}cc)";
    }
}

$c = new Carro("Toyota",2023,4);
$m = new Moto("Honda",2022,650);

echo $c->apresentar() . PHP_EOL;
echo $m->apresentar();