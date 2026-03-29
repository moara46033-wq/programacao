<?php
class Conta{
    public $Nconta;
    public $titular;
    public $saldo;
    public $taxaJuros;
public function depositar(){
return "O titular da conta despositou dinheiro";
}
public function sacar(){
return "O titular da conta sacou dinheiro";
}
}
$conta = new conta();

$conta-> Nconta = "400";
$conta-> titular = "Rafaela";
$conta-> saldo = "2000";
$conta-> taxaJuros= "04";


echo "O número da conta á: " . $conta->Nconta. "<br>";
echo "O titular da conta é: " . $conta->titular . "<br>";
echo "O saldo atual da conta é:  " . $conta->saldo . " <br>";
echo "A taxa de juros é:" . $conta->taxaJuros. "% <br>";
echo $conta->depositar()."de área <br>";
echo $conta->sacar()."<br>";
?>