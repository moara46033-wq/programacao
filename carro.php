<?php
class Carro{
    public $marca;
    public $modelo;
    public $cor;
    public $ano;
     public $velocidadeM;
public function acelerar(){
return "o carro esta acelerando";
}
public function frear(){
return "o carro esta freando";
}

}
$carro1 = new Carro();

$carro1-> marca = "Ford";
$carro1-> modelo = "ka";
$carro1-> cor = "preto";
$carro1-> ano  = "2019";
$carro1-> velocidadeM  = "200";


echo "O carro é da marca: " . $carro1->marca . "<br>";
echo "O modelo é: " . $carro1->modelo. "<br>";
echo "A cor é: " . $carro1->cor . " <br>";
echo "o ano é:" . $carro1->ano. " <br>";
echo "A velocidade máxima" . $carro1->velocidadeM. "<br>";
echo $carro1->acelerar()."<br>";
echo $carro1->frear()."<br>";
?>
