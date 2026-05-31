<?php
class Aluno {

    private $nome;
    private $nota1;
    private $nota2;

    public function __construct($nome, $nota1, $nota2) {
        $this->nome = $nome;
        $this->setNota1($nota1);
        $this->setNota2($nota2);
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNota1() {
        return $this->nota1;
    }

    public function setNota1($nota1) {

        if ($nota1 >= 0 && $nota1 <= 10) {
            $this->nota1 = $nota1;
        }
    }

    public function getNota2() {
        return $this->nota2;
    }

    public function setNota2($nota2) {

        if ($nota2 >= 0 && $nota2 <= 10) {
            $this->nota2 = $nota2;
        }
    }

    public function calcularMedia() {
        return ($this->nota1 + $this->nota2) / 2;
    }

    public function situacao() {

        if ($this->calcularMedia() >= 5) {
            echo "Aprovado<br><br>";
        } else {
            echo "Reprovado<br><br>";
        }
    }
}

$a = new Aluno("Ana", 8, 6);

echo "Média: " . $a->calcularMedia() . "<br>";
$a->situacao();


?>