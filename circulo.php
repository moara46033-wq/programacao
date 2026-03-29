<?php
class Circulo{
    public $raio;

    public function area(){
        return ($this->raio * $this-> raio) * 3.14;
    }

    public function perimetro(){
        return $this->raio * 3.14 * 2;
    }
}

$circulo= new Circulo();

$circulo-> raio="5";


echo "O raio é: " . $circulo->raio. "<br>";
echo $circulo->area(). "Área <br>";
echo $circulo->perimetro(). "Perímetro <br>";
?>