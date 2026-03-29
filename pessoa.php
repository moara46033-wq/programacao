<?php
class Pessoa{
    public $genero;
    public $nome;
    public $data;
   
     public function meses() {
        return $this->idade * 12;
      
     }
     public function dias(){
          return $this->idade * 365;
     }

}

$pessoa1 = new Pessoa();

$pessoa1-> genero= "Feminino";
$pessoa1-> nome = "Maria";
$pessoa1-> idade = "20";


echo "Genêro: " . $pessoa1->genero. "<br>";
echo "Nome: " . $pessoa1->nome . "<br>";
echo "Idade: " . $pessoa1->idade . "<br>";
echo $pessoa1->meses()." em meses <br>";
echo $pessoa1->dias()."em dias <br>";

?>