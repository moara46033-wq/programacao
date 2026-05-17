<?php

class Funcionario {

    private $nome;
    private $cargo;
    private $salario;

    public function setNome($nome) {

        if (!empty(trim($nome))) {
            $this->nome = $nome;
        } else {
            echo "Nome inválido!<br>";
        }
    }

    public function setCargo($cargo) {

        if (!empty(trim($cargo))) {
            $this->cargo = $cargo;
        } else {
            echo "Cargo inválido!<br>";
        }
    }

    public function setSalario($salario) {

        if ($salario > 0) {
            $this->salario = $salario;
        } else {
            echo "Salário inválido!<br>";
        }
    }

    public function aumentarSalario($percentual) {

        if ($percentual > 0) {

            $this->salario +=
            ($this->salario * $percentual / 100);

            echo "Salário aumentado com sucesso!<br>";

        } else {

            echo "Percentual inválido!<br>";
        }
    }

    public function mostrarFuncionario() {

        echo "<h3>Dados do Funcionário</h3>";

        echo "Nome: " . $this->nome . "<br>";

        echo "Cargo: " . $this->cargo . "<br>";

        echo "Salário: R$ " .
        number_format($this->salario, 2, ",", ".") .
        "<br>";
    }
}



$funcionario = new Funcionario();

$funcionario->setNome("Marcos");
$funcionario->setCargo("Programador");
$funcionario->setSalario(3000);

echo "<h4>Antes do aumento</h4>";
$funcionario->mostrarFuncionario();

$funcionario->aumentarSalario(10);

echo "<h4>Depois do aumento</h4>";
$funcionario->mostrarFuncionario();

?>