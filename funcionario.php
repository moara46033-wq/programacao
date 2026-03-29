
<?php
class Funcionario {
    public $nome;
    public $cargo;
    public $salario;
    public $dataAdmissao;
   
public function salarioAnual(){
 return $this->salario * 12;
}
}
$funcionario1 = new Funcionario();

$funcionario1-> nome = "Ana Júlia";
$funcionario1-> cargo = "Assistente";
$funcionario1-> salario = "1800";
$funcionario1-> dataAdmissao  = "2019";

echo "O(a) funcionario(a) " . $funcionario1->nome . "<br>";
echo "O cargo é: " . $funcionario1->cargo . "<br>";
echo "o salário é: " . $funcionario1->salario . " <br>";
echo "a data de admissão:" . $funcionario1->dataAdmissao. " <br>";
echo "o salario anual é R$" . $funcionario1-> salarioAnual(). "<br>";

?>