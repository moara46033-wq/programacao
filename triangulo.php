<?php
class Triangulo{
    public $base;
    public $altura;
    public $lado1;
    public $lado2;
    public $lado3;

    public function area(){
      return ($this->base * $this->altura) /2;  
    }
    
    public function tipo() {
        if ($this->lado1 == $this->lado2 and $this->lado2 == $this->lado3) {
            return "Equilátero";
        }
        if ($this->lado1 == $this->lado2 or $this->lado1 == $this->lado3 or $this->lado2 == $this->lado3) {
            return "Isósceles";
        }
        return "Escaleno";
    }
}

$triangulo= new Triangulo();

$triangulo->base="10";
$triangulo->altura="5";
$triangulo-> lado1="5";
$triangulo->lado2="5";
$triangulo->lado3="5";
echo "Base" . $triangulo-> base. "<br>";
echo "Altura" . $triangulo-> altura. "<br>";
echo $triangulo->area(). "<br>";
echo $triangulo->tipo()."<br>";
?>