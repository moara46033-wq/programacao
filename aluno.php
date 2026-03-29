<?php 
class Aluno{
    public $nome;
    public $Nmatricula;
    public $media;
   

    public function situacao(){
        if ($this -> media >= 70){
            return "Aprovado";
    
        }else {
            return "Reprovado";
        }
    }
}
$aluno= new Aluno();


$aluno-> nome= "Maria";
$aluno-> Nmatricula= "2023806543";
$aluno-> media = "90";



echo "O nome do aluno é: " . $aluno->nome . "<br>";
echo "Mátricula: " . $aluno->Nmatricula. "<br>";
echo "Média: " . $aluno->media . " <br>";
echo $aluno->situacao()."<br>";
?>
