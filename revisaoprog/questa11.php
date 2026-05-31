<?php
class Retangulo {

    private $largura;
    private $altura;

    public function __construct($largura, $altura) {

        if ($largura > 0 && $altura > 0) {
            $this->largura = $largura;
            $this->altura = $altura;
        }
    }

    public function calcularArea() {
        return $this->largura * $this->altura;
    }

    public function calcularPerimetro() {
        return 2 * ($this->largura + $this->altura);
    }
}

$r1 = new Retangulo(5, 4);
$r2 = new Retangulo(7, 3);

if ($r1->calcularArea() > $r2->calcularArea()) {
    echo "Retângulo 1 possui maior área.<br><br>";
} else {
    echo "Retângulo 2 possui maior área.<br><br>";
}

?>