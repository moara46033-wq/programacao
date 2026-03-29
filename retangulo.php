<?php
class Retangulo {
    public $comprimento;
    public $largura;
   
   
public function area(){
 return $this->comprimento * $this-> largura;
}

   
public function perimetro(){
 return 2 * ($this ->comprimento + $this->largura);
}
}
$retangulo = new Retangulo();

$retangulo-> comprimento = "100";
$retangulo-> largura = "50";

echo "Comprimento: " . $retangulo->comprimento. "<br>";
echo "Largura: " . $retangulo->largura . "<br>";

echo $retangulo->area()."de área <br>";
echo $retangulo->perimetro()." deperímetro <br>";

?>



